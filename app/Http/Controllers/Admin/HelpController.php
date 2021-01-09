<?php

namespace App\Http\Controllers\Admin;

use App\Help;
use App\HelpCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.help.index',['help' => Help::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $helpCategory = HelpCategory::all();
        return view('admin.help.create',compact('helpCategory'));
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
            'help_category_id' => ['required','numeric'],
            'title' => ['required','min:2','max:255'],
            'description' => ['required'],
            'type' => ['required','numeric']
        ]);
        Help::create([
            "help_category_id" => $request->help_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type
        ]);
        return back()->withSuccess('Help & Support is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        $helpCategory = HelpCategory::all();
        return view('admin.help.update',compact('help','helpCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        $request->validate([
            'help_category_id' => ['required','numeric'],
            'title' => ['required','min:2','max:255'],
            'description' => ['required'],
            'type' => ['required','numeric']
        ]);
        $help->update([
            "help_category_id" => $request->help_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type
        ]);
        return back()->withSuccess('Help & Support is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        $help->delete();
        return back()->withSuccess('Help & Support Deleted');
    }
}
