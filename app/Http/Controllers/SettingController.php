<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function enableDisableCookie(Request $request)
    {
    	$setting = Setting::first();
    	$setting->is_cookie_enabled = $request->cookie_status;
    	$setting->save();
    	return response()->json(["status"=>"success"],200);
    }
}
