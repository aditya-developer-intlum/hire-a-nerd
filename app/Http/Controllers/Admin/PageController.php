<?php

namespace App\Http\Controllers\Admin;

use Str;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    private $page;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.page.view',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->init(new Page)
        ->check($request)
        ->setProps($request)
        ->save();
        return back()->with('success','New Page is created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        $page = Page::whereSlug($page)->first();
        return view('admin.pages.page.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Page $page)
    {
        $this->init($page)
        ->check($request)
        ->setProps($request)
        ->save();
        return back()->with('success','Page is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return back()->with('success','Page is deleted');
    }
    /**
     * Change status of page
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function status(Page $page)
    {
        if($page->is_active){
            $page->update(['is_active' => false]);
        } else {
            $page->update(['is_active' => true]);
        }
        return back();
    }
    /**
     * Intialise Model
     * @param App\Page $page
     * @return $this
     */
    private function init(Page $page)
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Validate Request
     * @param \Illuminate\Http\Request $request
     * @return $this
     */
    private function check(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        return $this;
    }
    /**
     * set props
     * @param \Illuminate\Http\Request $request
     * @return $this
     */
    private function setProps(Request $request)
    {
        $this->page->title = $request->title;
        $this->page->slug = Str::slug($request->title,'-');
        $this->page->contents = $request->contents;

        return $this;
    }
    /**
     * Save Model
     * @return void
     */
    private function save()
    {
        $this->page->save();
    }
}
