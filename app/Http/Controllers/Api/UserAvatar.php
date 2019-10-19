<?php

namespace App\Http\Controllers\Api;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use App\Http\Traits\Invoke;
use Auth;

class UserAvatar extends Controller
{
    /**
     * @param Request $request
     * @param int  $id
     *
     * @return json
     */
    public function __invoke(Request $request)
    {
        $this->check($request)->store($request);
      
        return back();
    }

    /**
     * Validate $request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function check(Request $request)
    {
      	$request->validate([
      		'avatar' => ['required', 'image']
      	]);
    	return $this;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   	private function store(Request $request)
   	{
   		if ($request->hasFile('avatar')) {
			  

        $user_details = UserDetail::firstOrCreate([
          'user_id' => $request->id,
        ]);
        Storage::disk('public')->delete($user_details->avatar);
        $user_details->avatar = $request->avatar->store('uploads/user/avatar', 'public');
        $user_details->save();

   		}
		    return $this;
   	}
     /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $user=UserDetail::select('avatar')->whereUserId($request->id)->first();

      return response()->json(["success"=>true,'data'=>$user->avatar]);
    }

}





