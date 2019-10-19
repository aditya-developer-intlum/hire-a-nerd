<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index()
    {
        $user = User::with('userBillingAaddresses')->get();
       
        foreach ($user as $u) {
            $data[] = [
                "id" => $u->id,
                "name" => $u->name,
                "email" => $u->email,
                "mobile_number" => $u->mobile_number,
                "created_at" => date('d F Y',strtotime($u->created_at)),
                "status" => $u->status,
                "country" => $u->userBillingAaddresses->country_id ?? "",
                "city" => $u->userBillingAaddresses->city_id ?? "",
            ];

        }
    	return response()->json($data);
    }
    public function status(User $id)
    {
    	if($id->status  == 1){
    		$status = 0;
    	} else {
    		$status = 1;
    	}
    	$id->update(['status'=> $status]);
    	return response()->json($id);
    }
    public function login(User $id)
    {
        $id->update(["token" => str_random(255)]);
    	return response()->json(["url" =>url("account/user/token/$id->token")]);
    }
    public function verifyToken($token)
    {
        $user = User::where("token",$token)->firstOrFail();
        Auth::login($user);
        $user->token = "";
        $user->save();
        return redirect("account");
    }
    public function store(Request $request)
    {
        return $this->check($request)->save($request);
    }
    private function check(Request $request)
    {
        $rule = [
            'name' => 'required',
            'email' => 'required|unique:users',
            'mobile_number' => 'required|numeric|unique:users'
        ];
        $request->validate($rule);
        return $this;
    }
    private function save(Request $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->phone
        ]);
    }
    public function destroy(User $user)
    {
        $id = $user->id;
        $user->userBillingAaddresses()->delete();
        $user->skill()->delete();
        $user->userEducation()->delete();
        $user->userCertification()->delete();
        $user->userLang()->delete();
        $user->userDetail()->delete();
        $user->delete();

        return response()->json($id);
    }
}
