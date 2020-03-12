<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostRequest;

class PostRequestController extends Controller
{
    public function active(Request $request)
    {
    	$requests = PostRequest::user()->get();

    	return view('post-request.active',compact('requests'));
    }
    public function action(Request $request)
    {
    	if($request->status == 'delete'){
    		PostRequest::whereId($request->id)->delete($request->id);
    	}else{
    		$post = PostRequest::find($request->id);
    		if($post->status){
    			$post->status = false;
    			$post->save();
    		}else{
    			$post->status = true;
    			$post->save();
    		}
    	}
    	return back();
    }
}
