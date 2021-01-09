<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubMenu;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Str;
use Session;
use Auth;

class SubCategoryController extends Controller
{
    private $subCategory;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()->can('viewAny',SubMenu::class)){
            
            $category = Menu::all();
            $this->subCategory = SubMenu::latest('id')->get();
            return view('admin.sub-category.view',['subCategory'=>$this->subCategory,'category'=>$category]);    
        }else{
            abort(404);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user()->can('create',SubMenu::class)) {
            
            $this->check($request);
            return SubMenu::create([
                'menu_id' => $request->category,
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
                'sort_id' => $request->sorting
            ]);
        }else{
            abort(404);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubMenu  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenu $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubMenu  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMenu $subCategory)
    {
        if(Auth::user()->can('update',SubMenu::class)){

            return $subCategory;    
        }else{
            abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubMenu  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenu $subCategory)
    {
        if ($request->user()->can('update',SubMenu::class)) {
            
            $this->check($request,$subCategory);
            $subCategory->update([
                'name'=> $request->name,
                'slug' => Str::slug($request->name, '-'),
                'sort_id' => $request->sorting
            ]);
            return $subCategory;
        }else{
            abort(404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubMenu  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMenu $subCategory)
    {
        if (Auth::user()->can('delete',SubMenu::class)) {
            
            $subCategory->delete();
        }else{
            abort(404);
        }
        
    }
     /**
     * validate Request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function check(Request $request,$subCategory = "")
    {
        if(!empty($subCategory)){

            $request->validate([
                'name'=> "required|unique:sub_menu,name,$subCategory->id",
                'category' =>'required',
            ]);
        }else{
            $request->validate([
                'name'=> "required|unique:sub_menu,name",
                'category' =>'required',
            ]);
        }
       
        return $this;
    }
    public function status(SubMenu $subCategory,$status)
    {
        if(Auth::user()->can('status',SubMenu::class)){
            if($status){
                $subCategory->update(['is_active' => 0]);
            }else{
                $subCategory->update(['is_active' => 1]);
            }
            return back();    
        }else{
            abort(404);
        }
        
    }
}
