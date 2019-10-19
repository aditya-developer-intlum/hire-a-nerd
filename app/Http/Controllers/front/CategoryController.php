<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Nerd;

class CategoryController extends Controller
{
    public function __invoke($page)
    {
    	$sidebar = Nerd::subMenu($page);
    	$title = Nerd::pageTitleFromSlug($page);
    	if ($sidebar->count()==0) {
    		
    		abort(404);
    	}
    	return view("front.category",compact("sidebar","title"));
    }
}
