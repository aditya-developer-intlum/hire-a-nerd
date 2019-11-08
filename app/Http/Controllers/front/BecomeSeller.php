<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class BecomeSeller extends Controller
{
    public function __invoke()
    {
    	$testimonial = Testimonial::all();
    	return view("front.become_seller",compact('testimonial'));
    }
}
