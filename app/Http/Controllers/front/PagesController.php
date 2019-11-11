<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Nerd;
use App\WishList;
use Auth;

class PagesController extends Controller
{

    public function __invoke($parent,$child)
    {
    	$gigs = $this->gigs(Nerd::getMenuId($parent),Nerd::getSubMenuId($child));
    		if(Auth::check()){
    			$wish = WishList::where('user_id',auth()->user()->id)->get();		
    		}else{
    			$widh = [];
    		}
    	 
    	$title = Nerd::pageTitleFromSlug($parent);
    	
    	return view("front.page",compact('gigs','title','wish'));
    }

    
}
