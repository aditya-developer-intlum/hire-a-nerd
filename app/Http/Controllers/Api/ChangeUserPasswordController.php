<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Traits\Invoke;
class ChangeUserPasswordController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Change User Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset and
    | includes a trait which assists in Invoke Request. 
    | Feel free to explore this trait.
    |
    */

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
			"password"=>"required|min:8|confirmed",
			"password_confirmation"=>"required"

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
		User::whereId($request->id)->update([
			
			"password"=>bcrypt($request->password)
			
		]);

		return $this;
	}
    
}
