<?php

namespace App\Http\Controllers\social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\UserSocialMedia;
use App\Models\LinkedAccount;
use Auth;

class Social extends Controller
{
    public function __invoke($driver)
    {
    	return Socialite::driver($driver)->redirect();
    }
    public function handle($driver)
    {
    
        $user = Socialite::driver($driver)->user();
        dd($user);
        UserSocialMedia::create([
        	
        	"user_id" => Auth::id(),
        	//"linked_account_id" => LinkedAccount::whereDriver($driver)->first()->id,
        	"nick_name" => $user->nickname,
        	"name" => $user->name,
        	"email" => $user->email,
        	"avatar" => $user->avatar
        ]);

        return back(); 
        
    }
}
