<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class VerifyMobileNumberController extends Controller
{
    public function __invoke(Request $request) 
    {
    	return response()->json($this->check($request)->otp($request));
    }

    private function check(Request $request) 
    {

    	$request->validate([
    		"mobile_number" => ["required","numeric","unique:users,mobile_number"],

    	]);

    	return $this;
    }
    private function otp(Request $request)
    {
    	$otp = 1234;
    	session(['otp' => '1234']);
    	return $otp;
    }
    private function store(Request $request)
    {
    	$user = User::find(Auth::id());	
    	$user->mobile_number = $request->mobile_number;
    	$user->save();

    	return $this;
    }
    public function verifyOtp(Request $request)
    {
    	if(session('otp')==$request->otp){

    		echo "otp Match";
    	} else{
    		echo "wrong otp";
    	}
    }
}
