<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class LoginFacebookController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    public function FacebookLogin()
    {
    	return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
    	try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }    
        
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            $user = User::where('email', $user->email)->whereStatus(true)->first();
            if($user)
            {
                 auth()->login($existingUser, true);
                return redirect()->to('/home');
            }
            else
            {
                return back()->with("success","Contact Admin");
            }
           
        } 
        else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
         	$newUser->term_and_condition=1;
            $newUser->save();
            Mail::to($user->email)->send(new WelcomeEmail($user));

            return back()->with("success","Thanks for Register");
        }

        
    }
}
