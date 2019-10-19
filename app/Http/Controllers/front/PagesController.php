<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Nerd;
use App\WishList;

class PagesController extends Controller
{

    public function __invoke($parent,$child)
    {
    	$gigs = $this->gigs(Nerd::getMenuId($parent),Nerd::getSubMenuId($child));
    	 $wish = WishList::where('user_id',auth()->user()->id)->get();
    	$title = Nerd::pageTitleFromSlug($parent);
    	
    	return view("front.page",compact('gigs','title','wish'));
    }

    
}
