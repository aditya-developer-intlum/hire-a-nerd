<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\BlockedUser;

class LoginController extends Controller
{
	use AuthenticatesUsers;

    protected $maxAttempts = 3;
    protected $decayMinutes = 5; //in minutes

	protected $redirectTo = '/admin/dashboard';

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $this->secure($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
       

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    public function showLoginForm()
    {
    	return view('admin/auth/login');
    }

    protected function authenticated(Request $request, $user)
    {
       if($user->isUser === true || $user->status === false ){
            
            $this->guard()->logout();   

            $request->session()->invalidate();
        return back()->withErrors(['email'=>'These credentials do not match our records.']);
       }

       BlockedUser::whereVisitors($request->ip())->delete();
      
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('admin/login');
    }
    private function secure(Request $request)
    {

        $attempt = BlockedUser::whereVisitors($request->ip())->first();

        if(!empty($attempt) && $attempt->total_attempt >= $this->maxAttempts){

            BlockedUser::updateOrCreate([
            'visitors' => $request->ip(),
            'blocked_duration' => 200,
        ],[
            'is_blocked' => true
        ]);

            abort(405);
        }else{
                BlockedUser::updateOrCreate([
                'visitors' => $request->ip(),
                'is_blocked' => false,
                'blocked_duration' => 200,
            ],[
                'total_attempt' => \DB::raw('total_attempt+1')
            ]);
        }
    }
}
