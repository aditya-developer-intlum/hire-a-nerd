<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("user/avatar","Api\UserAvatar");
Route::get("user/avatar","Api\UserAvatar@show");

Route::post("user/description","Api\UserDescription");
Route::get("user/description-value","Api\UserDescription@edit");

Route::post("user/skills","Api\UserSkills");
Route::get("user/find-skills","Api\FindUserSkill");

Route::post("user/language","Api\UserLanguageController");

Route::post("user/language/update","Api\UserLanguageController@edit");
Route::post("user/language/destroy","Api\UserLanguageController@delete");

Route::get("user/language","Api\UserLanguageController@show");

Route::get("user/user-language","Api\UserLanguageController@getLanguage");

Route::post("user/education","Api\UserEducationController");

Route::post("user/social-media","Api\UserSocialMediaController");

Route::post("user/certification","Api\UserCertificationController");

Route::post("user/billing-address","Api\UserBillingAddressController");

Route::post("user/change-password","Api\ChangeUserPasswordController");

Route::post("user/my-account","Api\UserPersionalDetailController");


/*Gig Routes Start*/

Route::post("gig-overview/create","Api\gig\Overview");

Route::post("gig-price/create/{id}","Api\gig\Price");

Route::post("gig-description/create/{id}","Api\gig\Description");

Route::post("gig-description/remove/faq","Api\gig\Description@faq");

Route::post("gig-description/update/faq","Api\gig\Description@faqUpdate");

Route::post("gig-requirement/create/{id}","Api\gig\Requirement");

Route::post("gig-gallery/create/{id}","Api\gig\Gallery");

Route::post("gig-publish/create/{id}","Api\gig\Publish");

Route::get("gig-cancel/{id}","Api\gig\CancelGig");

/*Gig Routes End*/




Route::get("admin/testimonial/data","Api\Admin\Testimonial");
Route::delete("admin/testimonial/{id}","Api\Admin\Testimonial@destroy");
Route::post("admin/testimonial/create","Api\Admin\Testimonial@store");
Route::patch("admin/testimonial/{id}/edit","Api\Admin\Testimonial@edit");
Route::post("admin/testimonial/{id}/update","Api\Admin\Testimonial@update");

Route::get("admin/user","Api\Admin\UserController@index");

