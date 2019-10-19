<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CancelOrder;
use App\Order;

class CanceledOrderController extends Controller
{
    public function __invoke(Request $request,Order $order)
    {

    	$request->validate([
    		"region" => "required"
    	]);

    	$order->is_cancelled = 1;
    	$order->save();

    	CancelOrder::create([
    		"order_id" =>$order->id,
    		"region" => $request->region
    	]);
    }
}
