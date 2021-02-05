<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HelpCategory;
use App\Help;

class HelpAndSupportController extends Controller
{
    public function index()
    {
    	$helpCategories = HelpCategory::with('helps')
    	->get();

    	return view('front.help-and-support',compact('helpCategories'));
    }
}
