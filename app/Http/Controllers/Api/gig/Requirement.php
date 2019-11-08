<?php

namespace App\Http\Controllers\Api\gig;

use Illuminate\Http\Request;
use App\Models\Gig;
class Requirement extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Gig Requirement Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling Gig Requirement Validation and
    | store in database. Feel free to explore this controller and extended 
    | controller.
    |
    */
    
    /**
     * Validate $request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function check(Request $request)
    {
    	$request->validate([
    		"requirement" => ['required','max:1200'],
    		//"answer_type" => ['required'],
    	]);

    	return $this;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request,$id)
    {
    	Gig::whereUserId($id)
    	->whereStatus(false)
    	->update($request->all());

    	return $this; 
    }
}
