<?php

namespace App\Http\Controllers\Api\gig;

use App\Models\Gig;
use App\Models\GigPrice;
use App\Models\GigScope;

use Illuminate\Http\Request;

class Price extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Gig Price Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling Gig Price Validation and
	| store in database. Feel free to explore extended
	| controller.
	|
	 */

	private $loop;

	/**
	 * Validate $request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	protected function check(Request $request) {
		$request->validate([
				"basic_package_name" => ['required', 'max:255'],
				"basic_description"  => ["required"],
				"basic_delivery_day" => ["required"],
				"basic_price"        => ["required"],
			]);

		return $this;
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	protected function store(Request $request, $id) {
		$gig = GigPrice::firstOrCreate([
				'gig_id' => $id,
				//'status' => false,
			]);
		$gig->gig_id                 = $id;
		$gig->basic_package_name     = $request->basic_package_name;
		$gig->standard_package_name  = $request->standard_package_name;
		$gig->premium_package_name   = $request->premium_package_name;
		$gig->basic_description      = $request->basic_description;
		$gig->standard_description   = $request->standard_description;
		$gig->premium_description    = $request->premium_description;
		$gig->basic_delivery_time    = $request->basic_delivery_day;
		$gig->standard_delivery_time = $request->standard_delivery_day;
		$gig->premium_delivery_time  = $request->premium_delivery_day;
		$gig->basic_price            = $request->basic_price;
		$gig->standard_price         = $request->standard_price;
		$gig->premium_price          = $request->premium_price;
		$gig->save();
		$price_id = $gig->id;

		if ($request->has('basic') && $request->has('standard') && $request->has('premium')) {

			$this->loop = max(count($request->basic), count($request->standard), count($request->premium));

		} else if ($request->has('basic')) {
			$this->loop = count($request->basic);
		}
		$gig = Gig::with('submenu.scopeList')->where('id', $id)->first();

		GigScope::where("gig_price_id", $price_id)->delete();

		for ($i = 0; $i < $gig->submenu->scopeList->count(); $i++) {

			GigScope::create([
					"gig_price_id" => $price_id,
					"basic"        => $request->basic[$i]??"",
					"standard"     => $request->standard[$i]??"",
					"premium"      => $request->premium[$i]??"",
				]);
		}

		Gig::find($id)->update(["widget_two" => 1]);

		return $this;
	}
}
