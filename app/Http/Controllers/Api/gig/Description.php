<?php

namespace App\Http\Controllers\Api\gig;

use App\GigFaq;
use App\Models\Gig;
use Illuminate\Http\Request;

class Description extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Gig Description Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling Gig Description Validation and
	| store in database. Feel free to explore this controller and extended
	| controller.
	|
	 */

	/**
	 * Validate $request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	protected function check(Request $request) {
		$request->validate([

				"describe_your_gig" => ['required', 'min:120', 'max:1200'],
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

		$data                   = [];
		$gig                    = Gig::whereUserId($id)->whereStatus(false)->first();
		$gig->describe_your_gig = $request->describe_your_gig;
		$gig->widget_three      = 1;
		$gig->save();

		if (is_iterable($request->question)) {

			foreach ($request->question as $key => $question) {

				if (!empty($question) && !empty($request->answer[$key])) {

					$data[] = [
						'gig_id'   => $gig->id,
						'question' => $question,
						'answer'   => $request->answer[$key]
					];
				}

			}
		}
		$gig->gigFaqs()->delete();
		if (!empty($data)) {

			$gig->gigFaqs()->insert($data);
		}
		return $this;
	}
	public function faq(Request $request) {
		GigFaq::destroy($request->faq);
	}
	public function faqUpdate(Request $request) {

		GigFaq::where('id', $request->id)->update([
				'question' => $request->question,
				'answer'   => $request->answer
			]);
	}

}
