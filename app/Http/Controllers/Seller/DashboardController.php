<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use App\Earning;
use App\Order;

class DashboardController extends Controller
{
	private $user;
    private $earning;
    private $netIncome;
    private $orderCompletion;
    private $deliverTime;

    public function __invoke(Request $request)
    {
    	$this->user = $request->user();

        $this->setEarning()
        ->getNetIncome()
        ->completedOrder()
        ->deliverTime();
    	
    	return view('seller.dashboard',[
    		'user' => $this->user,
    		'earning' => $this->netIncome,
            'completedOrder' => (int)($this->orderCompletion),
            'delivered' => (int) ($this->deliverTime),
    	]);
    }
    private function setEarning()
    {
        $this->earning = Earning::where('seller_id',$this->user->id)->get();
        return $this;
    }
    private function getNetIncome()
    {
        $this->netIncome = $this->earning
        ->whereBetween('created_at',[Carbon::now()->startOfMonth(),Carbon::now()])
        ->where('mode','credited')->sum('amount');
        return $this;
    }
    private function completedOrder()
    {
        $totalOrders = Order::where('seller_id',$this->user->id)->count();
        $CompletedOrders = Order::where('seller_id',$this->user->id)->where('is_completed',true)->count();
        if ($CompletedOrders) {
            $this->orderCompletion = ($CompletedOrders*100)/$totalOrders;
        }else{
            $this->orderCompletion = 100;
        }

        
        return $this;
    }
    private function deliverTime()
    {
         $deliveredOrders = Order::where('seller_id',$this->user->id)->where('is_delivered',true)->count();
         $deliveredWithLate = Order::where('seller_id',$this->user->id)->where('is_delivered',true)->where('is_late',true)->count();
         if ( $deliveredWithLate) {
             
            $this->deliverTime  = (  $deliveredWithLate*100)/$deliveredOrders;
         }else{
             $this->deliverTime = 100;
         }
    }


}
