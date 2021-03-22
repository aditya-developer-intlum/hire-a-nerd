<?php

namespace App\Http\Controllers;

use App\Http\Controllers\front\JobDetailController;
use App\Http\Requests\AffiliateRequest;
use Illuminate\Http\Request;
use App\AffiliateLinks;
use App\Models\SubMenu;
use App\Models\Menu;
use App\Models\Gig;
use App\Affiliate;
use Str;
use Auth;
use Jenssegers\Agent\Agent;
use App\AffiliateUserVisited;
use Illuminate\Support\Facades\Cookie;

class AffiliateController extends Controller
{
    private $affiliate;

    public function becomeAffiliate()
    {
    	return view('front.affiliate.add-affiliate');
    }

    public function register(AffiliateRequest $request)
    {
    	try {
    		
			Affiliate::create($request->all());

			return back()->with("Thanks for being affiliate");

    	} catch (Exception $e) {
    		
    		return back()->withError($e->getMessage());
    	}

    }
    public function copyAffiliateLink(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            "service_id" => ["required","exists:gigs,id"]
        ]);

        $affiliate = AffiliateLinks::query()
        ->where("affiliate_id",$user->id)
        ->where("service_id",$request->service_id);

        if ($affiliate->exists()) {
            
            return env('APP_URL')."affiliate/".$affiliate->first()->generated_link;
        }else{

            $link = Str::random(60);

            AffiliateLinks::create([
                "affiliate_id" => $user->id,
                "service_id" => $request->service_id,
                "generated_link" => $link,
                "total_clicks" => 0,
                "total_purchase" => 0
            ]);
            
            return env('APP_URL')."affiliate/".$link;
        }

    }
    public function getService(Request $request,String $token)
    {
        $this->affiliate = AffiliateLinks::where("generated_link",$token)
        ->firstOrFail();

        $total = AffiliateUserVisited::query()
            ->where("affiliate_link_id",$this->affiliate->id);
        
        $visited = AffiliateUserVisited::query()
        ->where("public_ip",$this->public_ip)
        ->where("affiliate_link_id",$this->affiliate->id)
        ->where("device",$this->device)
        ->where("os",$this->agent->platform())
        ->where("browser",$this->agent->browser())
        ->where("device_type",$this->device_type);
        
        if ($visited->exists()) {
            
            $visited->increment('total_count', 1);


        }else{

            AffiliateUserVisited::create([
                "public_ip" => $this->public_ip,
                "affiliate_link_id" => $this->affiliate->id,
                "total_count" => 1,
                "unique_count" => 1,
                "device" => $this->device,
                "os" => $this->agent->platform(),
                "browser" => $this->agent->browser(),
                "device_type" => $this->device_type
            ]);
        }

        $this->affiliate->update([
            "total_clicks" => $total->sum('total_count'),
            "unique_clicks" => $total->sum('unique_count') 
        ]);
        
        $this->setCookie($this->affiliate);

        return (new JobDetailController)($this->menu->slug,$this->subMenu->slug,$this->affiliate->service_id);

    }

    private function setCookie($affiliate)
    {
        $minutes = 60000000;

        Cookie::queue("affiliate_id",$affiliate->affiliate_id, $minutes);
        
        return $this;
    }

    public function __get($param)
    {
        switch ($param) {
            case 'service':
                return Gig::findOrFail($this->affiliate->service_id);
            break;
            case 'menu':
                return Menu::findOrFail($this->service->category);
            break;
            case 'subMenu';
                return SubMenu::findOrFail($this->service->sub_category);
            break;
            case 'agent':
                return new Agent;
            case 'public_ip':
                return trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
            break;
            case 'device':
                $str = $_SERVER["HTTP_USER_AGENT"];
                $pos1 = strpos($str, '(')+1;
                $pos2 = strpos($str, ')')-$pos1;
                $part = substr($str, $pos1, $pos2);
                $data = explode(" ", $part);
                return end($data);
            break;
            case 'device_type':
                if ($this->agent->isDesktop()) {
                    return "Desktop";
                }else{
                    return "Mobile";
                }
            break;

        }
    }

}
