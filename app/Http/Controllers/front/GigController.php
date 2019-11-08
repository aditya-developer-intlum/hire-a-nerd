<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\GigPrice;
use App\Models\GigScope;
use App\Models\Menu;

use App\Models\ScopeList;
use App\Models\SubMenu;
use Auth;
use Illuminate\Http\Request;

class GigController extends Controller {
	public function __invoke() {
		$gig = Gig::whereUserId(Auth::id())
			->whereStatus(false)
			->first();
		if (empty($gig)) {

			$gig        = (object) ["id" => ""];
			$category   = Menu::all();
			$priceScope = [];
			$gigPricing = [];
			$checkbox   = [];
			return view("front.gig", compact('gig', 'category', 'priceScope', 'gigPricing', 'checkbox'));
		}
		$priceScope = $this->priceScope($gig);
		$gigPricing = $this->pricing($gig);
		if (!empty($gigPricing)) {

			$checkbox = $this->checkbox($gigPricing);
		}

		$category = Menu::all();
		return view("front.gig", compact('gig', 'category', 'priceScope', 'gigPricing', 'checkbox'));
	}
	public function subCategory(Request $request) {
		return subMenu::whereMenuId($request->id)->get();
	}

	private function priceScope(Gig $gig) {
		return ScopeList::with('scope')
			->whereMenuIdAndSubMenuId($gig->category, $gig->sub_category)
		                                               ->get();
	}
	private function pricing(Gig $gig) {
		return GigPrice::with('gigScope')
			->whereGigId($gig->id)
			->whereStatus(false)	->first();
	}
	private function checkbox(GigPrice $gigPricing) {
		$basic    = [];
		$standard = [];
		$premium  = [];
		foreach ($gigPricing->gigScope as $key => $value) {
			$basic[]    = $value->basic;
			$standard[] = $value->standard;
			$premium[]  = $value->premium;
		}

		return ["basic" => $basic, "standard" => $standard, "premium" => $premium];
	}
	public function update(Request $request, $service) {
		$gig = $service;
		if (empty($gig)) {

			$gig        = (object) ["id" => ""];
			$category   = Menu::all();
			$priceScope = [];
			$gigPricing = [];
			$checkbox   = [];
			return view("front.gig", compact('gig', 'category', 'priceScope', 'gigPricing', 'checkbox'));
		}
		$priceScope = $this->priceScope($gig);
		$gigPricing = $this->pricing($gig);
		if (!empty($gigPricing)) {

			$checkbox = $this->checkbox($gigPricing);
		}

		$category = Menu::all();
		return view('front.service-edit', compact('gig', 'category', 'priceScope', 'gigPricing', 'checkbox'));
	}

}
