<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller {
	public function index(Request $request) {
		$gig = Gig::where('user_id', $request->user()->id)->get();

		return view('seller.gig.view', compact('gig'));
	}
	public function destroy($service) {

		$service->delete();
		return back();
	}
}
