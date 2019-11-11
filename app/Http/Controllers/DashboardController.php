<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\WishList;

class DashboardController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $wish = WishList::where('user_id',auth()->user()->id)->get();

    	$gigs = Gig::with('user','user.userDetail','menu','subMenu')->whereStatus(true)
                ->whereIsStatus(1)
                ->take(20)
                ->orderBy('id',"desc")
                ->get();

        $weekly = Gig::with('user','user.userDetail')->whereStatus(true)
                ->whereIsStatus(1)
                ->take(20)
                ->orderBy('id',"desc")
                ->get();
        return view('home',compact('gigs','weekly','wish'));
    }
    public function show()
    {
        $wish = WishList::where('user_id',auth()->user()->id)->get();

        $gigs = Gig::with('user','user.userDetail','menu','subMenu')->whereStatus(true)
                ->whereIsStatus(1)
                ->orderBy('id',"desc")
                ->paginate(50);
        return view('services',compact('gigs','wish'));
    }
}
