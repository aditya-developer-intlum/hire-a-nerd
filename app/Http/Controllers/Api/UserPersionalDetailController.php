<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Traits\Invoke;

class UserPersionalDetailController extends Controller
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
			"name"=>"required",
			"email"=>"required|email|unique:users,email,$request->id,id",

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
		User::where("id",$request->id)
		->update([
			"name"=>$request->name,
			"email"=>$request->email,
			"online_status"=>$request->online_status
		]);

		return $this;
	}
}
