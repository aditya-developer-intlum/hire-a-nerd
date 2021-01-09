<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\PostRequest;

class PostRequestController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('status') && !empty($request->status)) {
            $postrequest = PostRequest::sortable()->where('status',$request->status)->latest()->paginate(15);
        }else{
            $postrequest = PostRequest::sortable()->latest()->paginate(15);
        }
   		return view('admin.manage-request.view',['skill'=> Skill::paginate(20),'postrequests' => $postrequest]);
    }
    public function action(Request $request)
    {
    	PostRequest::whereId($request->id)->update(["status"=>$request->status]);
    	return back();
    }
}
