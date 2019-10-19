<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gig;
use Auth;
use App\Order;
use App\Earning;
use App\AdminEarning;
use App\User;

class OrdersController extends Controller
{
	private $amount;
	private $sellerEarning;
	private $AdminEarning;
	private $admin;
	private $order;
    private $dueData;
    private $active;
    private $delivered;
    private $completed;
    private $cancelled;
    private $all; 
    private $data;   

    public function store($gigId,$package)
    {
    	$gig = Gig::with('gigPrice')->where('id',$gigId)->first();
    	$this->getPrice($gig,$package)
    	->getAdmin()
    	->amountSplit()
        ->getDueDate($gig,$gigId,$package)
        ->save($gig,$gigId,$package)
    	->earning($gig)
    	->adminEarning($gig);

    	return back()->withSuccess("Order Placed Successfully");
    }
    private function getDueDate(Gig $gig,$gigId,$package): object
    {
        $package .= "_delivery_time";
        $this->dueData = date('Y-m-d h:i:s',strtotime("+ {$gig->gigPrice->$package} days"));
        return $this;
    }
    private function save(Gig $gig,$gigId,$package): object
    {
    	$this->order = new Order;
    	$this->order->buyer_id = Auth::id();
    	$this->order->seller_id = $gig->user_id;
    	$this->order->gig_id = $gigId;
    	$this->order->package = $package;
        $this->order->total_price = $this->amount;
        $this->order->price = $this->sellerEarning;
        $this->order->due_date = $this->dueData;
    	$this->order->save();
    	return $this;
    }
    private function getPrice(Gig $gig,$package): object
    {
    	switch ($package) {
    		case 'basic':
    			$this->amount = $gig->gigPrice->basic_price;		
    		break;
    		case 'standard':
    			$this->amount = $gig->gigPrice->standard_price;
    		break;
    		case 'premium':
    			$this->amount = $gig->gigPrice->premium_price;
    		break;
    	}
    	return $this;
    }
    private function getAdmin(): object
    {
    	$this->admin = User::where('type',1)->first();
    	return $this;
    }
    private function amountSplit():object
    {
    	$this->sellerEarning = ($this->amount*70)/100;
    	$this->AdminEarning = $this->amount-$this->sellerEarning;
    	return $this;
    }
    private function earning(Gig $gig): object
    {
    	Earning::create([
    		'seller_id' => $gig->user_id,
    		'buyer_id' => auth()->user()->id,
    		'gig_id' => $gig->id,
    		'amount' => $this->sellerEarning,
    		'mode' => 'credited',
    		'order_id' => $this->order->id,
    		'region' => 'Earing for Selling Service'
    	]);
    	return $this;
    }
    private function adminEarning(Gig $gig): object
    {
    	AdminEarning::create([
    		'admin_id' => $this->admin->id,
    		'seller_id' => $gig->user_id,
    		'gig_id' => $gig->id,
    		'amount' => $this->AdminEarning,
    		'order_id' => $this->order->id,
    		'mode' => 'credited',
    		'region' => 'Seller Service Sold Commision 30% of the total amount of service',
    	]);
    	return $this;
    }
    public function index(Request $request)
    {
        $this->active($request)
        ->delivered($request)
        ->completed($request)
        ->cancelled($request)
        ->all();

        $orders = $request->user()->load('sellerOrders', 'sellerOrders.gig.gigPrice', 'sellerOrders.user');
        return view('front.order',compact('orders','order_listings'),$this->data);
    }
    private function active(Request $request): object
    {
        $this->active = Order::with('seller','gig')->where('buyer_id',auth()->user()->id)
        ->whereIsCompleted(false)
        ->whereIsAccepted(true)
        ->orWhere('is_accepted',false)
        ->whereIsRejected(false)
        ->whereIsLate(false)
        ->whereIsDelivered(false)
        ->whereIsCancelled(false)
        ->get();
        return $this;
    }
    private function delivered(Request $request): object
    {
        $this->delivered = Order::with('seller','gig')->where('buyer_id',auth()->user()->id)
        ->whereIsCompleted(false)
        ->whereIsAccepted(true)
        ->whereIsRejected(true)
        ->whereIsDelivered(false)
        ->whereIsCancelled(false)
        ->get();
        return $this;
    }
    private function completed(Request $request): object
    {
        $this->completed = Order::with('seller','gig')->where('buyer_id',auth()->user()->id)
        ->whereIsCompleted(false)
        ->whereIsAccepted(true)
        ->orWhere('is_accepted',false)
        ->whereIsRejected(false)
        ->whereIsLate(false)
        ->whereIsDelivered(false)
        ->whereIsCancelled(false)
        ->get();
        return $this;
    }
    private function cancelled(Request $request): object
    {
        $this->cancelled = Order::with('seller','gig')->where('buyer_id',auth()->user()->id)
        ->whereIsCompleted(false)
        ->whereIsAccepted(true)
        ->orWhere('is_accepted',false)
        ->whereIsRejected(false)
        ->whereIsLate(false)
        ->whereIsDelivered(false)
        ->whereIsCancelled(false)
        ->get();
        return $this;
    }
    private function all(): object
    {
        $this->all = Order::with('seller','gig')->where('buyer_id',auth()->user()->id)->get();
        $this->data = [
            'active' => $this->active,
            'delivered' => $this->delivered,
            'completed' => $this->completed,
            'cancelled' => $this->cancelled,
            'all' => $this->all
        ];
        return $this;
    }
}
