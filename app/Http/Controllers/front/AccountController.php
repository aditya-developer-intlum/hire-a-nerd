<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Models\University;
use App\Models\Country;
use App\Models\UserSocialMedia;

class AccountController extends Controller
{
    public function __invoke(Request $request)
    {
    	$user = User::with([
            'userDetail',
            'userLang',
            'userLang.Language',
            'userCertification',
            'UserEducation.country',
            'UserEducation.university',
            'skill',
            'linkedAccount'
        ])
        ->whereId(Auth::id())
        ->first();

        $facebook = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(7)
        ->first();

        $google = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(8)
        ->first();

        $dribble = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(9)
        ->first();

        $stack = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(10)
        ->first();

        $linkedin = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(11)
        ->first();

        $behance = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(12)
        ->first();

        $github = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(19)
        ->first();

        $vimeo = UserSocialMedia::whereUserId(Auth::id())
        ->whereLinkedAccountId(20)
        ->first();

    	return view("front.account",compact(
            'user',
            'facebook',
            'google',
            'dribble',
            'stack',
            'linkedin',
            'behance',
            'github',
            'vimeo'
        ));
    }

    public function searchUniversity(Request $request)
    {
    	$university = University::select('id','name')
        ->where("name","like",$request->name."%")
        ->get();

        return response()->json($university);
    }
    public function searchCountry(Request $request)
    {
    	$country = Country::select('id','name')
        ->where("name","like",$request->name."%")
        ->get();

        return response()->json($country);
    }

    public function deactiveUser(Request $request)
    {

        User::whereId($request->id)
        ->update([
            "deative_reasion" => $request->deactive_reason
        ]);

        return response()->json(['success'=>true]);
    }
}
