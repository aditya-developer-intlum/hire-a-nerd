<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Notifications\SubadminRegistrationNotification;
use Log;
class SubAdminController extends Controller
{
   private $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()->permissions()->whereSlug('can_viewAny_sub_admin')->exists()){
            $this->setTableSize($request)
            ->find($request)
            ->loadData($request)
            ->search($request);

            $permissions = Permission::all();
            
            return view('admin.sub-admin.view',['user'=> $this->user,'permissions'=> $permissions]);    
        } else {
            abort(404);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->permissions()->whereSlug('can_create_sub_admin')->exists()){
            return view('admin.sub-admin.create');    
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->user()->permissions()->whereSlug('can_create_sub_admin')->exists()){
            $this->check($request);
            $user = User::create([
                'name' => sprintf('%s %s',$request->first_name,$request->last_name),
                'f_name' => $request->first_name,
                'l_name' => $request->last_name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'password' => bcrypt($request->password),
                'type' => 2,
                'status' => 1
            ]);
            $this->registrationNotification($request,$user);
            return back()->with('success','Sub Admin Added');    
        }else{
            abort(404);
        }
        
    }
    /**
     * Send Notification to Sub admin Login Credential
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registrationNotification(Request $request,User $user)
    {
        try {
            $user->notify(new SubadminRegistrationNotification($request));
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Auth::user()->permissions()->whereSlug('can_edit_sub_admin')->exists()){
            return view('admin.sub-admin.edit',compact('user'));    
        }else{
            abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->user()->permissions()->whereSlug('can_edit_sub_admin')->exists()){
            $this->check($request,$user);
            $user->update([
                'name' => sprintf('%s %s',$request->first_name,$request->last_name),
                'f_name' => $request->first_name,
                'l_name' => $request->last_name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
            ]);
            return back()->with('success','Sub Admin Updated');    
        }else{
            abort(404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,User $user)
    {
        if($request->user()->permissions()->whereSlug('can_delete_sub_admin')->exists()){
           
            $user->delete();
        }else{
            abort(404);
        }
    }
    /**
     * Validate Request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function check(Request $request,$user = '')
    {
        if(!empty($user->id)){
            $id = $user->id;
        }else{
            $id = "";
        }

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => "required|unique:users,email,$id,id",
            'mobile_number' => "required|numeric",
            'password' => 'nullable|confirmed'
        ]);
        return $this;
    }
  
    private function find(Request $request)
    {
        if($request->has('search')){
            Session::put('search_sub_admin',$request->search);    
        }
        return $this;
    }
    public function remove()
    {
        Session::forget('search_user');
    }
    private function setTableSize(Request $request)
    {
        if($request->has('display')){
            Session::put('sub_admin_table_size',$request->display);
        }
        return $this;
    }
    private function loadData(Request $request)
    {
        if(empty(Session::get('search_sub_admin'))){
            $this->user = User::orderBy('id','desc')
            ->where('type',2)->paginate(Session::get('sub_admin_table_size') ?? 10);
        }
        return $this;
    }
    private function search(Request $request)
    {
        if(!empty(Session::get('search_sub_admin'))){

            $search = Session::get('search_sub_admin');
                $this->user = User::orderBy('id','desc')
            ->where('type',2)
            ->Where(function($query) use ($search){
                
                $query->orWhere('name','like','%'.$search.'%')
                ->orWhere('email','like','%'.$search.'%')
                ->orWhere('mobile_number','like','%'.$search.'%');
            })
           ->paginate(Session::get('sub_admin_table_size') ?? 10);
        }
        return $this;
    }
    public function status(User $user,$status)
    {
        
        if (Auth::user()->can('status',User::class)) {

            if($status){
                $user->update(['status'=> 0]);
            }else{
                $user->update(['status'=> 1]);
            }
           
            return back();
        }else{
            abort(404);
        }
    }
   

}
