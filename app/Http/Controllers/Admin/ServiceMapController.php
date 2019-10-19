<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Scope;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\ScopeList;
class ServiceMapController extends Controller
{
    private $scopeList;
    private $data = [];
    private $category;
    private $subCategory;


    public function __construct(ScopeList $scopeList,Menu $category,SubMenu $subCategory)
    {
        $this->scopeList = $scopeList;
        $this->category = $category;
        $this->subCategory = $subCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->has('category')){

            $this->data = $this->scopeList->whereMenuId($request->category)->get();
        }
        if($request->has('subcategory')){

            $this->data = $this->scopeList->whereSubMenuId($request->subcategory)->get();
        }
        if($request->has('category') && $request->has('subcategory')){

            $this->data =$this->scopeList->whereMenuIdAndSubMenuId($request->category,$request->subcategory)->get();
        }
        return view('admin.service-map.view',[
            'scopelist' => $this->data,
            'category' => $this->category->get(),
            'subCategory' => $this->subCategory->get(),
            'scopes' => Scope::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->check($request)
        ->save($request);

        return response()->json('success');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ScopeList $scopeList)
    {
        $this->scopeList = $scopeList;
        return $this->check($request)
        ->save($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScopeList $ScopeList)
    {
        $scopeList->delete();
    }
    /**
     * validate request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function check(Request $request)
    {
        $request->validate([
            'category' => 'required|numeric|exists:menu,id',
            'sub_category' => 'required|numeric|exists:sub_menu,id',
            'service_type' => 'required' 
        ]);
        return $this;
    }
    /**
     * setup database columns
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function save(Request $request)
    {

        foreach ($request->service_type as $key => $list) {
            
            ScopeList::updateOrCreate([
                'menu_id' => $request->category,
                'sub_menu_id' => $request->sub_category,
                'scope_id' => $list
            ],[
                'menu_id' => $request->category,
                'sub_menu_id' => $request->sub_category,
                'scope_id' => $list
            ]);
        }
        
        return $this;
    }
    /**
     * Insert in Database given request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    // private function save()
    // {
    //     $this->scopeList->insert($this->data);
    //     return $this;
    // }
    public function getSubCategory(Request $request)
    {
        if($request->has('category_id')){

            return SubMenu::where('menu_id',$request->category_id)->get();
        }
    }
}
