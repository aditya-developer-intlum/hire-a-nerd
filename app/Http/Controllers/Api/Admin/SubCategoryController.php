<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\SubMenu;
use App\Models\ScopeList;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubMenu::with('menu')->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->check($request);
        $submenu =  SubMenu::create([
            'menu_id' => $request->menu_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);
        if($request->has('scope')){

            foreach ($request->scope as $_scope) {
                
                ScopeList::create([
                    'menu_id' => $request->menu_id,
                    'sub_menu_id' => $submenu->id,
                    'scope_id' => $_scope['scope_id']
                ]);
            }
        }
        return $submenu->load('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenu $subMenu)
    {
        return $subMenu->load('menu','scopeList');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenu $subMenu)
    {
        $this->check($request);
        $subMenu->update([
            'menu_id' => $request->menu_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);
        if($request->has('scope')){

            ScopeList::where('sub_menu_id',$subMenu->id)->delete();
            foreach ($request->scope as $_scope) {
                
                ScopeList::create([
                    'menu_id' => $request->menu_id,
                    'sub_menu_id' => $subMenu->id,
                    'scope_id' => $_scope['scope_id']
                ]);
            }
        }
        return $subMenu->load('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMenu $subMenu):void
    {
        $subMenu->delete();
    }
    /**
     * Validate Request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function check(Request $request)
    {
        $rules = [
            'menu_id' => ['required','exists:sub_menu'],
            'name' => ['required',"unique:sub_menu,name,$request->id"],
        ];
        $request->validate($rules);
        return $this;
    }
}
