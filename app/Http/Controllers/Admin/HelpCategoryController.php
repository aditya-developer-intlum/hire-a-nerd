<?php

namespace App\Http\Controllers\Admin;

use App\HelpCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.help-category.index',[
            'helpCategory' => HelpCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.help-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','min:2','max:255'],
            'type' => ['required','numeric']
        ]);

        HelpCategory::create([
            'title' => $request->title,
            'type' => $request->type
        ]);
        return back()->withSuccess('New Help Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppHelpCategory  $appHelpCategory
     * @return \Illuminate\Http\Response
     */
    public function show(HelpCategory $helpCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppHelpCategory  $appHelpCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpCategory $helpCategory)
    {
        return view('admin.help-category.update',compact('helpCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppHelpCategory  $appHelpCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HelpCategory $helpCategory)
    {
        $request->validate([
            'title' => ['required','min:2','max:255'],
            'type' => ['required','numeric']
        ]);

       $helpCategory->update([
            'title' => $request->title,
            'type' => $request->type
        ]);
        return back()->withSuccess('Help Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppHelpCategory  $appHelpCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpCategory $helpCategory)
    {
        $helpCategory->delete();
        return back()->withSuccess('Help Category Deleted');
    }
}
