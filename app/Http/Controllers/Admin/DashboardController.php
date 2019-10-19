<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	$users = User::with('userDetail')->whereType(0)->take(10)->orderBy('id','desc')->get();
    	return view('admin.dashboard',['users'=>$users]);
    }
}
