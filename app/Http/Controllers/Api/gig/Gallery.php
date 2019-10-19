<?php

namespace App\Http\Controllers\Api\gig;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValdiateGallery;
use App\Models\Gig;
use Illuminate\Http\Request;
use Storage;

class Gallery extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Gig Gallery Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling Gig Gallery Validation and
	| store in database.
	|
	 */

	/**
	 * @param Request $request
	 * @param int  $id
	 *
	 * @return json
	 */
	public function __invoke(ValdiateGallery $request, int $id) {
		$this->store($request, $id);

		return response()->json([
				"success" => true,
			]);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	private function store(Request $request, int $id) {

		$this->verify($request, $id, "gig_photo_one", "gig-photo");
		$this->verify($request, $id, "gig_photo_two", "gig-photo");
		$this->verify($request, $id, "gig_photo_three", "gig-photo");
		$this->verify($request, $id, "gig_video", "gig-video");
		$this->verify($request, $id, "gig_pdf_one", "gig-pdf");
		$this->verify($request, $id, "gig_pdf_two", "gig-pdf");

		return $this;
	}
	/**
	 * Verify file has
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @param  string  $filename
	 * @param  string  $upload
	 * @return \Illuminate\Http\Response
	 */
	private function verify(Request $request, int $id, string $filename, string $upload):bool {

		if ($request->has('gig_id')) {
			$gig              = Gig::whereId($request->gig_id)->first();
			$gig->widget_five = 1;
		} else {

			$gig              = Gig::whereUserId($id)->whereStatus(false)->first();
			$gig->widget_five = 1;
		}

		if ($request->has($filename)) {

			Storage::disk('public')->delete($gig->$filename);

			$gig->$filename = $request->$filename->store("uploads/$upload", "public");

			$gig->save();

			return true;

		} else {

			return false;
		}

	}

}
