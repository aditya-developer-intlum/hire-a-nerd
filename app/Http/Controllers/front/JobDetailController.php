<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\Gig;
use Nerd;
use App\Models\Scope;

class JobDetailController extends Controller
{
    public function __invoke($parent,$child, $id)
    {
    	$gigs = Gig::with(
    		'user',
    		'user.userDetail',
    		'user.userBillingAaddresses',
    		'user.skill',
    		'gigPrice',
    		'gigPrice.gigScope',
            'gigFaqs'
    	)
    	->findOrFail($id);
        $gigs->increment('clicks');
        $gigs->save();
    	$checkbox = $this->checkbox($gigs->gigPrice);
    	$scopes = Scope::whereIn("id",$checkbox[$checkbox['maxNumber']])->get();
    	$title = Nerd::pageTitleFromSlug($parent);
    	$subTitle = Nerd::pageSubTitleFromSlug($child);
    	return view("front.job-detail",compact("gigs","title",'subTitle','scopes','checkbox'));
    }
    private function checkbox($gigPricing)
    {
        $basic = [];
        $standard = [];
        $premium = [];
        foreach ($gigPricing->gigScope as $key => $value) {
           $basic[] = $value->basic;
           $standard[] = $value->standard;
           $premium[] = $value->premium;
        }
        $max = max(
        			$this->filterZero($basic),
        			$this->filterZero($standard),
        			$this->filterZero($premium)
        		);
        if($this->filterZero($basic)==$max){
        	$maxNumber = "basic";
        } else if($this->filterZero($standard)==$max) {

        	$maxNumber = "standard";
        } else if($this->filterZero($premium)==$max) {
        	$maxNumber = "premium";
        }
        	$return = [
        		"basic" => $basic,
        		"standard" => $standard,
        		"premium" => $premium,
        		"maxNumber" => $maxNumber,
        	];
        return $return;
    }
    private function filterZero($arr)
    {
    	if(!empty(array_count_values(array_map('strval', $arr))['0'])){

    		return count($arr) - array_count_values(array_map('strval', $arr))['0'];
    	} else {

    		return count($arr);
    	}
    	
    }
}
