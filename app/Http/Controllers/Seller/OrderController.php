<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller {

	/**
	 *
	 * @return Orders View
	 */
	public function index(Request $request) {
		$orders = $request->user()->load('sellerOrders', 'sellerOrders.gig.gigPrice', 'sellerOrders.user');
		$this->late($orders);
		return view('seller.order.view', compact('orders'));
	}
	public function status(Request $request, Order $order) {

		switch ($request->status) {
			case 'active':
				$order->is_accepted = 1;
				$order->accepted_at = Carbon::now();
				break;
			case 'delivered':
				$order->is_delivered = 1;
				$order->delivered_at = Carbon::now();
				break;
			case 'cancel':
				$order->is_cancelled = 1;
				$order->rejected_at = Carbon::now();
				break;

			default:
				// code...
				break;
		}

		$order->save();
		return back();
	}
	private function late($orders) {

		foreach ($orders->sellerOrders as $order) {

			if ($order->is_accepted == true && $order->is_completed == false) {
				$due     = new Carbon($order->created_at);
				$package = "{$order->package}_delivery_time";

				$date = Carbon::parse($due->copy()->addDays($order->gig->gigPrice->$package));
				$now  = Carbon::now();
				//echo $order->id;
				$diff = $this->dateDiff($date, $now);

				if ($diff >= 0) {
					$order_new          = Order::find($order->id);
					$order_new->is_late = 1;
					$order_new->save();
				}

			}
		}
		return back();
	}
	private function dateDiff($date1, $date2) {
		$date1_ts = strtotime($date1);
		$date2_ts = strtotime($date2);
		$diff     = $date2_ts-$date1_ts;
		return round($diff/86400);
	}

}
