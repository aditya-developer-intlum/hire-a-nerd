<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserSkill;
use App\Http\Traits\Invoke;

class UserSkills extends Controller
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
    		'skill_name'=>['required'],
    		'skill_level'=>['required']
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
    	UserSkill::create([
    		"user_id"=>$request->id,
    		"skill_name"=>$request->skill_name,
    		"skill_level"=>$request->skill_level,
    		"skill_id"=>$this->skillNametoId($request->skill_name),
    	]);

    	return $this;
    			
    }

}
