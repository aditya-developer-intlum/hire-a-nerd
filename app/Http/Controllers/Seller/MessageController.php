<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chat;
use App\ChatRelation;
use App\Events\SendMessage;
use Auth;

class MessageController extends Controller
{
    private $messge = [];

    public function index()
    {
        $friends = ChatRelation::with('user.unreadMessage','user.userdetail')->whereSenderId(Auth::id())->get();
        
        //dd($friends->user);
        

    	return view('seller.message.index',['friends'=>$friends]);
    }
    public function sendMessage(Request $request)
    {
    	$chat = Chat::create([
    		"sender_id" => $request->sender_id,
    		"receiver_id" => $request->receiver_id,
    		"message" => $request->message,
            "is_seen" => $request->is_seen ?? 0
    	]);
    	event(new SendMessage($chat));
    	return $chat;
    }
    public function getMessage(Request $request)
    {
        $senderId = $request->senderId;
        $receiverId = $request->receiverId;
        if(!empty($senderId) && !empty($receiverId)){

            if($request->has('last')){

                return  Chat::whereSenderIdAndReceiverId($senderId,$receiverId)
                ->latest()
                ->take(1)
                ->orWhere(function($query) use ($senderId,$receiverId){
                $query->where('receiver_id',$senderId);
                $query->where('sender_id',$receiverId);
                })->get();

            }
            
            return  Chat::whereSenderIdAndReceiverId($senderId,$receiverId)
            ->orWhere(function($query) use ($senderId,$receiverId){
                $query->where('receiver_id',$senderId);
                $query->where('sender_id',$receiverId);
            })->get();
            
        }
    }
    public function readMessage(Request $request)
    {
        Chat::where('sender_id',$request->sender_id)->where('receiver_id',$request->receiver_id)->update(['is_seen'=>true]);
    }
}
