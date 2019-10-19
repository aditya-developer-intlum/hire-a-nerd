<?php

namespace App\Http\Controllers\Admin;

use App\PressAndNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PressAndNewsController extends Controller
{
    private $press;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = PressAndNew::all();
        return view('admin.pages.press-and-news.view',['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.press-and-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->press = new PressAndNew;
        $this->check($request)
        ->setProps($request)
        ->uploadPicture($request)
        ->save();
        return back()->with('success','Data Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PressAndNew  $pressAndNew
     * @return \Illuminate\Http\Response
     */
    public function show(PressAndNew $pressAndNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PressAndNew  $pressAndNew
     * @return \Illuminate\Http\Response
     */
    public function edit(PressAndNew $pressAndNew)
    {
        return view('admin.pages.press-and-news.edit',compact('pressAndNew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PressAndNew  $pressAndNew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PressAndNew $pressAndNew)
    {
        $this->press = $pressAndNew;
        $this->check($request)
        ->setProps($request)
        ->uploadPicture($request)
        ->save();
        return back()->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PressAndNew  $pressAndNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(PressAndNew $pressAndNew)
    {
        $pressAndNew->delete();
        return back()->with('success','Press and News is deleted');
    }
    public function status(PressAndNew $pressAndNew)
    {
        if($pressAndNew->is_active){
            $pressAndNew->update(['is_active' => 0]);
        } else{
            $pressAndNew->update(['is_active' => 1]);
        }
        return back();
    }

     /**
     * Validate request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function check(Request $request)
    {
        $request->validate([
            'image' => ['nullable','image'],
            'title' => ['required','max:191'],
            'description' => ['required']
        ]);

        return $this;
    }
    /**
     * set Props of the table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function setProps(Request $request)
    {
        $this->press->title = $request->title;
        $this->press->description = $request->description;
        return $this;
    }
    /**
     * Uploading Picture 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function uploadPicture(Request $request)
    {
        if($request->has('image')){
            $this->press->picture = $request->image->store('uploads/pages/press-and-news','public');
        }
        return $this;
    }
    /**
     * Save data
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function save()
    {
        $this->press->save();
    }
}
