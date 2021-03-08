<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scope;
use App\AdminEarning;
use Stripe\Customer;
use App\Models\Gig;
use Stripe\Charge;
use Stripe\Stripe;
use App\Earning;
use App\Payment;
use App\Order;
use App\User;
use Exception;
use App\StripeTransaction;

use Auth;

class OrdersController extends Controller
{
	private $amount;
    private $deliveryTime;
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

    public function create($gigId,$package)
    {
        $service = Gig::with('gigPrice.gigScope')->where('id',$gigId)->firstOrFail();
        $this->getPrice($service,$package);
        if (empty($this->amount) && empty($this->deliveryTime)) {
            abort(404);
        }

        $checkbox = $this->checkbox($service->gigPrice);
        $scopes = Scope::whereIn("id",$checkbox[$package])
        ->pluck('name')
        ->toArray();
        
        return view('payments.add',[
            'service' => $service,
            'amount' => $this->amount,
            'package' => $package,
            'scopes' => $scopes,
            'deliveryTime' => $this->deliveryTime,
            'gigId' => $gigId,
            'package' => $package
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gigId' => 'required',
            'package' => 'required'
        ]);
        $gigId = $request->gigId;
        $package = $request->package;

        $gig = Gig::with('gigPrice')->where('id',$gigId)->first();
        $this->getPrice($gig,$package)
        ->getAdmin()
        ->amountSplit()
        ->getDueDate($gig,$gigId,$package);

        /** I have hard coded amount. You may fetch the amount based on customers order or anything */
        $amount     = $this->amount * 100;
        $currency   = 'usd';

        if (empty($request->stripeToken)) {
            session()->flash('error', 'Some error while making the payment. Please try again');
            return back()->withInput();
        }
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        try {
            /** Add customer to stripe, Stripe customer */
            $customer = Customer::create([
                'email'     => $request->email,
                'name'      => $request->name,
                'source'    => $request->stripeToken,
                'address' => [
                    'line1' => '510 Townsend St',
                    'postal_code' => '98140',
                    'city' => 'San Francisco',
                    'state' => 'CA',
                    'country' => 'US',
                ]
            ]);
        } catch (Exception $e) {
            $apiError = $e->getMessage();
        }

        if (empty($apiError) && $customer) {
            /** Charge a credit or a debit card */
            try {
                /** Stripe charge class */
                $charge = Charge::create(array(
                    'customer'      => $customer->id,
                    'amount'        => $amount,
                    'currency'      => $currency,
                    'description'   => $gig->gig_title
                ));
            } catch (Exception $e) {
                $apiError = $e->getMessage();
            }

            if (empty($apiError) && $charge) {
                // Retrieve charge details 
                $paymentDetails = $charge->jsonSerialize();
                
                if ($paymentDetails['amount_refunded'] == 0 && empty($paymentDetails['failure_code']) && $paymentDetails['paid'] == 1 && $paymentDetails['captured'] == 1) {
                    /** You need to create model and other implementations */


                    $this->save($gig,$gigId,$package)
                    ->earning($gig)
                    ->adminEarning($gig);
                    StripeTransaction::create([
                        "order_id" => $this->order->id,
                        "gig_id" => $gigId,
                        "stripe_id" => $paymentDetails['id'],
                        "amount" => $paymentDetails['amount']/100,
                        "description"=> $paymentDetails['description'],
                        "receipt_url" => $paymentDetails['receipt_url'],
                        "status" => $paymentDetails['status']
                    ]);

                    return redirect('/thankyou/?receipt_url=' . $paymentDetails['receipt_url']);
                } else {
                    session()->flash('error', 'Transaction failed');
                    return back()->withInput();
                }
            } else {
                session()->flash('error', 'Error in capturing amount: ' . $apiError);
                return back()->withInput();
            }
        } else {
            session()->flash('error', 'Invalid card details: ' . $apiError);
            return back()->withInput();
        }
    }

    /*public function store($gigId,$package)
    {
        return $this->create($gigId,$package);
    	$gig = Gig::with('gigPrice')->where('id',$gigId)->first();
    	$this->getPrice($gig,$package)
    	->getAdmin()
    	->amountSplit()
        ->getDueDate($gig,$gigId,$package);

        $this->save($gig,$gigId,$package)
    	->earning($gig)
    	->adminEarning($gig);

    	return back()->withSuccess("Order Placed Successfully");
    }*/
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
                $this->deliveryTime = $gig->gigPrice->basic_delivery_time;		
    		break;
    		case 'standard':
    			$this->amount = $gig->gigPrice->standard_price;
                $this->deliveryTime = $gig->gigPrice->standard_delivery_time;
    		break;
    		case 'premium':
    			$this->amount = $gig->gigPrice->premium_price;
                $this->deliveryTime = $gig->gigPrice->premium_delivery_time;
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
        ->whereIsRejected(false)
        ->whereIsDelivered(true)
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
