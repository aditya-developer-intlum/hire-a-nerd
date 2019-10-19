<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\Testimonial;
use App\Models\Marketplace;
use App\User;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
        $testimonial = Testimonial::all();

        $marketplace = Marketplace::all();
        return view('auth.login',compact("gigs","weekly","testimonial","marketplace"));
    }

    public function mode(User $user)
    {
        if($user->mode == 1){
            $user->mode = 2;
        }else{
            $user->mode = 1;
        }
        $user->save();
        if(!$user->isDirty()){
            return response()->json(['updated']);
        }
    }
}
