<?php

namespace App\Http\Controllers\Admin;

use App\Commision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminCommisionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Commision::updateOrCreate([
            'user_id' => $request->user()->id,
            'menu_id' => $request->menu_id ?? null,
            'sub_menu_id' => $request->sub_menu_id ?? null,
        ],[
            'amount' => $request->amount ?? null
        ]);
    }
    public function show(Request $request,int $id,string $type)
    {
        if($type === 'menu'){

            return Commision::whereUserIdAndMenuId($request->user()->id,$id)->first();    

        } else {

            return Commision::whereUserIdAndSubMenuId($request->user()->id,$id)->first();
        }
        
    }
    public function search(Request $request)
    {
        $commision = Commision::whereUserIdAndSubMenuId($request->user()->id,$request->submenu)->first();
        if(empty($commision)){

          $com = Commision::whereUserIdAndMenuId($request->user()->id,$request->menu)->first();  
          if(empty($com)){
            return response()->json(['value'=>0]);
          }
          return response()->json(['value' => $com->amount]);
        }

        return response()->json(['value' => $commision->amount]);
    }
}
