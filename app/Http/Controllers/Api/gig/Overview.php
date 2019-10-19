<?php

namespace App\Http\Controllers\Api\gig;

use Illuminate\Http\Request;
use App\Models\Gig;

class Overview extends Controller
{   
    /*
    |--------------------------------------------------------------------------
    | Gig Overview Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling Gig Overview Validation and
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
    		"gig_title" => ['required',"max:80"],
    		"category" => ["required"],
    		"tags" => ["required"],
            "sub_category" => ["required"]
    	]);

    	return $this;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request)
    {

        $gig = Gig::firstOrCreate([
            'user_id' => $request->id,
            'status' => false,
        ]);
    	
        $gig->gig_title =  $request->gig_title;
        $gig->category = $request->category;
        $gig->sub_category = $request->sub_category;
        $gig->tags = $request->tags;
        $gig->widget_one = 1;
    	$gig->save();

    	return $this; 
    }
}
