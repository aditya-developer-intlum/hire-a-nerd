<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Menu::all();
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
        return Menu::create([
            'slug' => Str::slug($request->name, '-'),
            'name' => ucfirst($request->name)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return $menu;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Menu $menu)
    {
        $this->check($request);

        $menu->update([
            'slug' => Str::slug($request->name, '-'),
            'name' => ucfirst($request->name) 
        ]);
        return $menu;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu):void
    {
        $menu->delete();
    }
     /**
     * Validate Request.
     *
     * @param \Illuminate\Http\Request  $request 
     * @return $this
     */
    private function check(Request $request)
    {
        $rules = [
            'name' => ['required','unique:menu'],
        ];
        $request->validate($rules);
        return $this;
    }
}
