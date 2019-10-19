<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use App\Http\Traits\Invoke;
use App\Employee;

class UserDescription extends Controller
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

    		"description"=>["required","max:1000"]
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

        $user_details = UserDetail::firstOrCreate([
          'user_id' => $request->id,
        ]);
        
        $user_details->description = $request->description;
        $user_details->save();
    	
    	return $this;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return response()->json([
            "status"=>true,
            "data"=>UserDetail::select('description')->where("user_id",$request->id)->first()]);
    }

}
