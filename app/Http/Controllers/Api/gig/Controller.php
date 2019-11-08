<?php

namespace App\Http\Controllers\Api\gig;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Main;

class Controller extends Main
{
    /*
    |--------------------------------------------------------------------------
    | Gig Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for Invoke Requests.
    |
    */

    /**
     * @param Request $request
     * @param int  $id
     *
     * @return json
     */
    public function __invoke(Request $request,$id = "")
    {
    	if (empty($id)) {
    		
    		$this->check($request)->store($request);

    	} else {

    		$this->check($request)->store($request,$id);
    	}
    	
    	
    	return response()->json([
    		"success" =>true,
    	]);
    }
}
