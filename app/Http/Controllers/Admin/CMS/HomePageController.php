<?php

namespace App\Http\Controllers\Admin\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CmsHome;

class HomePageController extends Controller
{
   public function index()
   {
   		$cms = CmsHome::first();
   		return view("admin.CMS.homepage",compact('cms'));
   }
   public function store(Request $request)
   {
   		$request->request->remove('_token');
   		CmsHome::where('id',1)->update($request->all());
   		return back();
   }
}
