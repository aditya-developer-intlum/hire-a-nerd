<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\Testimonial;
use App\Models\Marketplace;
use App\User;
use App\CmsHome;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->has('token')) {
            
            $user = User::where('token',$request->token)->firstOrFail();

            $user->status = 1;
            $user->token = \Str::random(191);
            $user->save();

            return redirect('/');
        }

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
        $home = CmsHome::first();
        return view('auth.login',compact("gigs","weekly","testimonial","marketplace","home"));
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
