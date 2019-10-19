<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserCertification;
use App\Http\Traits\Invoke;

class UserCertificationController extends Controller
{
    use Invoke;

    /**
     * Validate $request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function check(Request $request)
    {
    	$request->validate([
    		"certified"=>"required",
    		"certified_from"=>"required",
    		"year"=>"required|numeric"
    	]);

    	return $this;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function store(Request $request)
    {
    	
    	UserCertification::create([
    		"user_id"=>$request->id,
    		"certified"=>$request->certified,
    		"certified_from"=>$request->certified_from,
    		"year"=>$request->year
    	]);

    	return $this;
    }
}
