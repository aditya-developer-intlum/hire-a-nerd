<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageEvent;
use App\User;
class Chat extends Controller
{
    public function __invoke(Request $request)
    {
    	return view('chat');
    }
    
    public function message(Request $request)
    {
    	
    	return event(new MessageEvent($request->all()));
    }
}
