<?php

namespace App\Http\Controllers\Admin;

use App\Models\Qualification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;

class QualificationController extends Controller
{
    private $qualification;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()->can('viewAny',Qualification::class)){
            $this->setTableSize($request)
            ->find($request)
            ->loadData($request)
            ->search($request);

            return view('admin.qualification.view',['qualification'=>$this->qualification]);
        }else{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->user()->can('create',Qualification::class)){
            $this->check($request);
            return Qualification::create(['name'=> $request->name]);    
        }else{
            abort(404);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $qualification)
    {
        if(Auth::user()->can('update',Qualification::class)){
            return $qualification;    
        }else{
            abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
        if($request->user()->can('update',Qualification::class)){
            $this->check($request);
            $qualification->update(['name'=> $request->name]);
            return $qualification;    
        }else{
            abort(404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        if(Auth::user()->can('delete',Qualification::class)){
            $qualification->delete();    
        }else{
            abort(404);
        }
        
    }
     /**
     * validate Request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function check(Request $request)
    {
        $request->validate([
            'name'=> 'required'
        ]);
        return $this;
    }
    private function setTableSize(Request $request)
    {
        if($request->has('display')){
            Session::put('qualification_table_size',$request->display);
        }
        return $this;
    }
    private function find(Request $request)
    {
        if($request->has('search')){
            Session::put('search_qualification',$request->search);    
        }
        return $this;
    }
    private function loadData(Request $request)
    {
        if(empty(Session::get('search_qualification'))){
            $this->qualification = Qualification::orderBy('id','DESC')
            ->paginate(Session::get('qualification_table_size') ?? 10);
        }
        return $this;
    }
    private function search(Request $request)
    {
        if(!empty(Session::get('search_qualification'))){
             $search = Session::get('search_qualification');
            $this->qualification = Qualification::orderBy('id','DESC')
            ->where('name','like','%'.$search.'%')
            ->paginate(Session::get('qualification_table_size') ?? 10);
        }
        return $this;
    }
    public function status(Qualification $qualification,$status)
    {
        if(Auth::user()->can('status',Qualification::class)){

            if($status){
                $qualification->update(['status'=>0]);
            }else{
                $qualification->update(['status'=>1]);
            }
            return back();
        }else{
            abort(404);
            
        }
    }
}
