<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Main;
use App\Models\Gig;

class Controller extends Main
{
    protected function gigs($page,$subcategory)
    {
    	return Gig::with('user','user.userDetail','menu','subMenu')
                ->whereStatus(true)
                ->whereIsStatus(1)
    			->whereCategory($page)
                ->whereSubCategory($subcategory)
                ->orderBy("id","desc")
                ->paginate(8);
    }
}
