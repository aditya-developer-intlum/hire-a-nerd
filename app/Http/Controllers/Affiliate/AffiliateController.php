<?php

namespace App\Http\Controllers\Affiliate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AffiliateController extends Controller
{
    public function index()
    {
    	return response()->json(["message"=> "Thanks to reach here"]);
    }
}
