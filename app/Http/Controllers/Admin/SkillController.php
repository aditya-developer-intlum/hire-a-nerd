<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;

class SkillController extends Controller
{
    private $skill;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->can('viewAny',Skill::class)){
            $this->setTableSize($request)
            ->find($request)
            ->loadData($request)
            ->search($request);

            return view('admin.skill.view',['skill'=>$this->skill]);
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
        if(Auth::user()->can('create',Skill::class)){
            $this->check($request);
            return Skill::create(['name'=> $request->name]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        if(Auth::user()->can('update',Skill::class)){
            return $skill;    
        }else{
            abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        if(Auth::user()->can('update',Skill::class)){
            $this->check($request);
            $skill->update(['name'=> $request->name]);
            return $skill;
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        if(Auth::user()->can('delete',Skill::class)){
            $skill->delete();
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
            Session::put('skill_table_size',$request->display);
        }
        return $this;
    }
    private function find(Request $request)
    {
        if($request->has('search')){
            Session::put('search_skill',$request->search);    
        }
        return $this;
    }
    private function loadData(Request $request)
    {
        if(empty(Session::get('search_skill'))){
            $this->skill = Skill::orderBy('id','DESC')
            ->paginate(Session::get('skill_table_size') ?? 10);
        }
        return $this;
    }
    private function search(Request $request)
    {
        if(!empty(Session::get('search_skill'))){
             $search = Session::get('search_skill');
            $this->skill = Skill::orderBy('id','DESC')
            ->where('name','like','%'.$search.'%')
            ->paginate(Session::get('skill_table_size') ?? 10);
        }
        return $this;
    }
}
