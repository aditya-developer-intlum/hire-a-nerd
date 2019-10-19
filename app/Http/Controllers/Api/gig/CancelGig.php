<?php

namespace App\Http\Controllers\Api\gig;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\GigPrice;
use App\Models\GigScope;

class CancelGig extends Controller
{
    public function __invoke($id)
    {
    	$gig = Gig::whereUserId($id)->whereStatus(false);
    	if(!empty($gig->first())){
	    	$gigPrice = GigPrice::where('gig_id','=',$gig->first()->id);
	    	GigScope::where("gig_price_id","=",$gigPrice->first()->id)->delete();
	    	$gigPrice->delete();
	    	$gig->delete();
	    }

    	return back();
    }
}
