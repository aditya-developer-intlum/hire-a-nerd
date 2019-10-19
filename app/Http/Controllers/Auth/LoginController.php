<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
     /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        
       $validator= $this->ValidateLoginData($request);
        if ($validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 201); // 400 being the HTTP code for an invalid request.
        }
        else
        {
            if(Auth::attempt(["email"=>$request->email,"password"=>$request->password,'status'=>1]))
            {
                return response()->json(array(
                'success' => true

                ), 200);
            }
            else
            {
                 return response()->json(array(
                'success' => false,
                'errors' => ["email"=>"Invalid Login Credentials"]

                     ), 201);
            }
        }
    }
    public function ValidateLoginData(Request $request)
    {
        $validator=Validator::make($request->all(),[

            "email"=>"required|email|max:255|exists:users",
            "password"=>"required",
        ]);

        return $validator;

        
    }
    public function showLoginForm()
    {
        return redirect("/");
    }
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
