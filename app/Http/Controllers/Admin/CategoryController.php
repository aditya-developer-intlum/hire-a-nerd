<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class CategoryController extends Controller {
	private $category;
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		if ($request->user()->can('viewAny', Menu::class )) {
		
			$this->category = Menu::latest('id')->get();

			return view('admin.category.view', ['category' => $this->category]);
		} else {
			abort(404);
		}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		if ($request->user()->can('create', Menu::class )) {
			$this->check($request);
			return Menu::create([
					'name' => $request->name,
					'slug' => Str::slug($request->name, '-'),
					'description' => $request->description,
				]);
		} else {
			abort(404);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Menu  $category
	 * @return \Illuminate\Http\Response
	 */
	public function show(Menu $category) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Menu  $category
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Menu $category) {
		if (Auth::user()->can('update', Menu::class )) {
			return $category;
		} else {
			abort(404);
		}

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Menu  $category
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Menu $category) {
		if (Auth::user()->can('update', Menu::class )) {
			$this->check($request,$category);
			$category->update([
					'name' => $request->name,
					'slug' => Str::slug($request->name, '-'),
					'description' => $request->description,
				]);
			return $category;
		} else {
			abort(404);
		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Menu  $category
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Menu $category) {
		if (Auth::user()->can('delete', Menu::class )) {
			$category->delete();
		} else {
			abort(404);
		}

	}
	/**
	 * validate Request
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return $this
	 */
	private function check(Request $request,$menu="") {

		if(!empty($menu)){
           $request->validate([
				'name' => "required|unique:menu,name,$menu->id"
			]);
        }else{
            $request->validate([
				'name' => "required|unique:menu,name"
			]);
        }
		
		return $this;
	}
	public function status(Menu $category, $status) {
		if (Auth::user()->can('status', Menu::class )) {

			if ($status) {
				$category->is_active = 0;
				$category->subMenu()->update(['is_active' => 0]);
				$category->save();
			} else {
				$category->is_active = 1;
				$category->subMenu()->update(['is_active' => 1]);
				$category->save();
			}
			return back();
		} else {
			abort(404);
		}
	}
}
