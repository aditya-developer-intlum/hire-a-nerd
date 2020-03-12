<?php

namespace App\Http\Controllers\front;

use App\PostRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Http\Requests\CheckPostRequest;
use App\Notifications\CustomServiceNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Gig;
use App\User;

class PostRequestController extends Controller
{
    private $postRequest;

    public function __construct(PostRequest $postRequest)
    {
        $this->postRequest = $postRequest;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'category' => Menu::all(),
            'subCategory' => SubMenu::all()
        ];
        return view('front.post-request',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckPostRequest $request)
    {
        $service = Gig::with('user')
                    ->where('category',$request->category)
                    ->where('sub_category',$request->subcategory)
                    ->get();
        $userIds = [];
        foreach ($service as $_service) {
            $userIds[] = $_service->user->id;
        }
        $users = User::whereIn('id',$userIds)->get();
        $this->postRequest->description = $request->description;
        $this->postRequest->category_id = $request->category;
        $this->postRequest->sub_category_id = $request->subcategory;
        $this->postRequest->deliver_time = $request->serviceDeliverTime;
        $this->postRequest->deliver_time_other = $request->serviceDeliverTimeOther;
        $this->postRequest->budget = $request->budget;
        $this->postRequest->user_id = auth()->user()->id;
        $this->postRequest->status = 3;
        if($request->has('attachfile')){
            $this->postRequest->attachment = $request->attachfile->store('uploads/custome-service','public');    
        }
        $this->postRequest->save();

        if(!empty($users)){
            Notification::send($users, new CustomServiceNotification($this->postRequest));    
        }
        
        return back()->withSuccess('Thanks for Post a Request');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PostRequest $postRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PostRequest $postRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostRequest $postRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRequest $postRequest)
    {
        //
    }
}
