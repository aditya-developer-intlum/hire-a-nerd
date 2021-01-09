<?php

namespace App\Http\Controllers\Admin\CMS;

use App\CmsSignup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    private $signup;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CmsSignup  $cmsSignup
     * @return \Illuminate\Http\Response
     */
    public function show(CmsSignup $cmsSignup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CmsSignup  $cmsSignup
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $cmsSignup = CmsSignup::first();
      
        return view("admin.CMS.signup",compact('cmsSignup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CmsSignup  $cmsSignup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cmsSignup = CmsSignup::first();
         $this->signup = $cmsSignup;
         $this->props($request)->save();
         return back()->withSuccess("Data is Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CmsSignup  $cmsSignup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CmsSignup $cmsSignup)
    {
        //
    }
    /**
     * set Props for resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function props(Request $request){

        $this->signup->title1 = $request->title1;
        $this->signup->desc1 = $request->desc1;
        $this->signup->title2 = $request->title2;
        $this->signup->desc2 = $request->desc2;
        $this->signup->title3 = $request->title3;
        $this->signup->desc3 = $request->desc3;
        $this->signup->title4 = $request->title4;
        $this->signup->desc4 = $request->desc4;
        $this->signup->title5 = $request->title5;
        $this->signup->desc5 = $request->desc5;
        return $this;
    }
    /**
     * store the resource in database
     *
     * @return void
     */
    private function save():void
    {
        $this->signup->save();
    }
}
