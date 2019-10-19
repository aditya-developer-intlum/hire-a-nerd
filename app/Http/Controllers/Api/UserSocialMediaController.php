<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserSocialMedia;
use App\Http\Traits\Invoke;

class UserSocialMediaController extends Controller
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
    		"linked_account_id"=>"required|numeric"
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
    	UserSocialMedia::create([
    		"user_id"=>$request->id,
    		"linked_account_id"=>$request->linked_account_id
    	]);
    	return $this;
    }
}
