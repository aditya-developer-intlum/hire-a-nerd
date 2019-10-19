<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\UserLocation;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request->all(),[

            "name"=>"required|max:255",
            "email"=>"required|email|max:255|unique:users",
            "password"=>"required|min:8|confirmed:password_confirmation",
            "password_confirmation"=>"required"
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            "term_and_condition"=>1,
        ]);
    }
    public function register(Request $request)
    {
        $validator=$this->validator($request);
        if ($validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 201); // 400 being the HTTP code for an invalid request.
        }
        else if(!$request->has('t_and_c'))
        {
            return response()->json(array(
                'success' => false,
                'errors' => ["term_and_condition"=>"Please Accept terms and conditions & privacy policy"]

            ), 201); // 400 being the HTTP code for an invalid request.
        }
        else
        {
            $user=User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password),
            "term_and_condition"=>1,
            ]);

            Auth::login($user);
            $this->location($user);

            Mail::to($request->email)->send(new WelcomeEmail($user));

            return response()->json(array(
                'success' => true

            ), 200);

        }
    }
    private function location($user)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://api.ipstack.com/103.50.80.193?access_key=76dff9cfe697673900fca2ffa49f73c4&format=1');
        $data = json_decode($response->getBody());

        $location = new UserLocation;
        $location->user_id = $user->id;
        $location->visitor = $data->ip;
        $location->type = $data->type;
        $location->continent_code =  $data->continent_code;
        $location->continent_name = $data->continent_name;
        $location->country_code = $data->country_code;
        $location->country_name = $data->country_name;
        $location->region_code = $data->region_code;
        $location->region_name = $data->region_name;
        $location->city = $data->city;
        $location->zip = $data->zip;
        $location->latitude = $data->latitude;
        $location->longitude = $data->longitude;
            
        $location->geo_id = $data->location->geoname_id;
        $location->capital = $data->location->capital;
        $location->country_flag = $data->location->country_flag;
        $location->country_flag_emoji = $data->location->country_flag_emoji;
        $location->calling_code = $data->location->calling_code;

        $location->lang_code = $data->location->languages[0]->code;
        $location->lang_name = $data->location->languages[0]->name;
        $location->lang_native = $data->location->languages[0]->native;

        $location->save();
    }
}
