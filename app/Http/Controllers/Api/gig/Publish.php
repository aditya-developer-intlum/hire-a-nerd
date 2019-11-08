<?php

namespace App\Http\Controllers\Api\gig;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\GigPrice;
use Illuminate\Http\Request;

class Publish extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Gig Publish Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling Gig Publish.
	|
	 */
	/**
	 * Publish Gig.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(Request $request, $id) {

		if (!empty($request->gig_id)) {
			$gig = Gig::whereId($request->gig_id)->first();
		} else {
			$gig = Gig::whereUserId($id)->whereStatus(false)->first();
		}

		if (empty($gig->widget_five)) {

			return response()->json('widget_five');

		} else if (empty($gig->widget_four)) {

			return response()->json('widget_four');

		} else if (empty($gig->widget_three)) {

			return response()->json('widget_three');

		} else if (empty($gig->widget_two)) {

			return response()->json('widget_two');

		} else if (empty($gig->widget_one)) {

			return response()->json('widget_one');

		} else {
			$gig->status = 1;

			$gig->save();

			GigPrice::where("gig_id", "=", $gig->id)->update(['status' => 1]);
			return response()->json('success');
		}
	}
}
