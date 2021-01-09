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
           
            $this->skill = Skill::latest('id')->get();

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
    
}
