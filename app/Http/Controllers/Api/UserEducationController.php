<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserEducation;
use App\Http\Traits\Invoke;

class UserEducationController extends Controller
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
    		"country_id"=>"required",
    		"university_id"=>"required",
    		"title"=>"required",
    		"branch_id"=>"required",
    		"year"=>"required|numeric"
    	],[

            "country_id.required" => "The country field is required.",
            "university_id.required" => "The university field is required."
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
    	UserEducation::create([
    		"user_id"=>$request->id,
    		"country_id"=>$this->CountryNameToId($request->country_id),
    		"university_id"=>$this->UniveristiyTextToId($request->university_id),
    		"title"=>$request->title,
    		"branch_id"=>$request->branch_id,
    		"year"=>$request->year,
    	]);

    	return $this;
    }
}
