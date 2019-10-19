<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserBillingAddress;
use App\Http\Traits\Invoke;

class UserBillingAddressController extends Controller
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

    		"company_name"=>"required|max:500",
    		"full_name"=>"required|max:500",
    		"country_id"=>"required",
    		"address"=>"required|max:500",
    		"city_id"=>"required",
    		"zip_code"=>"required|numeric",
    		"invoice"=>"boolean",
    	],[
            'country_id.required' => 'The country field is required.',
            "city_id.required" => "The city field is required."
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
    	UserBillingAddress::create([
    		"user_id"=>$request->id,
    		"company_name"=>$request->company_name,
    		"full_name"=>$request->full_name,
    		"country_id"=>$request->country_id,
    		"address"=>$request->address,
    		"city_id"=>$request->city_id,
    		"zip_code"=>$request->zip_code,
    		"is_invoice"=>$request->is_invoice??0
    	]);

    	return $this;
    }
}
