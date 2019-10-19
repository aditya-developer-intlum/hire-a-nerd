<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class FindUserSkill extends Controller
{	
	/*
    |--------------------------------------------------------------------------
    | Find User Skill Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for Search Skill.
    |
    */

	/**
     * Get Skills
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
    	return response()->json(

    	Skill::select("name","id")
    	->where("name","like",$request->name."%")
    	->get()

    	);
    	
    }
}
