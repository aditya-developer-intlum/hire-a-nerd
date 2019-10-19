<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    private $faq;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::all();
        return view('admin.pages.faq.view',compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->faq = new Faq;
        $this->check($request)
        ->setProps($request)
        ->save();
        return back()->with('success','FAQ is saved');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        $faq = new Faq;
        return view('admin.pages.faq.show',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.pages.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $this->faq = $faq;
        $this->check($request)
        ->setProps($request)
        ->save();
        return back()->with('success','faq is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back()->with('success','faq is deleted');
    }
    /**
     * Change status of FAQ
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function status(Faq $faq)
    {
        if($faq->is_active){
            $faq->update(['is_active' => false]);
        } else {
            $faq->update(['is_active' => true]);
        }
        return back();
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
            'title' => 'required|max:191',
            'description' => 'required',
            'type' => 'required'
        ]);
        return $this;
    }
    /**
     * set Probs 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function setProps(Request $request)
    {
        $this->faq->title = $request->title;
        $this->faq->type = $request->type;
        $this->faq->description = $request->description;
        return $this;
    }
    /**
     * save faq
     *
     * @return void
     */
    private function save(): void
    {
        $this->faq->save();
    }
}
