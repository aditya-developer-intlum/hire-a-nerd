<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HelpCategory;
use App\Help;
use App\Topic;

class HelpAndSupportController extends Controller
{
    public function index(HelpCategory $helpCategory)
    {
    	return view('front.help-and-support',compact('helpCategory'));
    }

    public function detail($id)
    {
    	
    	$helps = Help::where('help_category_id',$id)
    	->get();

    	return view('front.help-and-support-detail',compact('helps'));
    }
}
