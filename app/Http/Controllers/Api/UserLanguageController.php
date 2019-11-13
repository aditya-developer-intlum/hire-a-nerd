<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserLanguage;
use App\Http\Traits\Invoke;
use App\Models\Language;
use App\User;

class UserLanguageController extends Controller
{
	use Invoke;
  
    /**
     * Validate $request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
    	$request->validate([
    		"language_id"=>"required",
    		"language_level"=>"required",

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
    	$userLanguage = UserLanguage::create([
    		"language_id"=>$this->TextToId($request->language_id),
    		"language_level"=>$request->language_level,
    		"user_id"=>$request->id,
    	]);
        $lang = Language::find($userLanguage->language_id);

        return [ 'userLanguage' => $userLanguage, 'lang' => $lang];
    }
    /**
     * Show the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $lang = Language::select('id','name')->where("name","like",$request->name."%")->get();

        return response()->json($lang);
    }
    public function getLanguage(Request $request)
    {
        return response()->json([
            "status" => true,
            "data" => UserLanguage::with('Language')
            ->whereUserId($request->id)
            ->get()
        ]);
    }
    public function edit(Request $request)
    {
        $this->check($request);
        UserLanguage::where('id',$request->id)->update([
            'language_id' => $this->TextToId($request->language_id),
            'language_level' => $request->language_level
        ]);
        return UserLanguage::with('language')->where('id',$request->id)->first();
    }
    public function delete(Request $request)
    {
        UserLanguage::where('id',$request->id)->delete();
    }

}




