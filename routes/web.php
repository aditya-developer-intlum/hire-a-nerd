<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

/*
|------------------------------------------------------------------------
| Welcome page
|------------------------------------------------------------------------
 */
Route::get('/', "HomeController@index")->middleware('guest');

Route::get('login', function () {return redirect("/");});

/*
|------------------------------------------------------------------------
| Login Routes
|------------------------------------------------------------------------
 */
Auth::routes();
/*
|------------------------------------------------------------------------
| Social Login
|------------------------------------------------------------------------
 */
/*
|------------------------------------------------------------------------
| Google Login
|------------------------------------------------------------------------
 */
Route::get('/google-login', 'Auth\LoginGoogleController@redirectToProvider')
	->name("google.login");

Route::get('/callback', 'Auth\LoginGoogleController@handleProviderCallback')
	->name("google.login.callback");
/*
|------------------------------------------------------------------------
| Facebook Login
|------------------------------------------------------------------------
 */
Route::get('/facebook-login', 'Auth\LoginFacebookController@FacebookLogin')
	->name("facebook.login");

Route::get('/facebook-callback', 'Auth\LoginFacebookController@handleFacebookCallback')
	->name("facebook.login.callback");
/*
|------------------------------------------------------------------------
| Search University in Profile Update
|------------------------------------------------------------------------
 */

Route::get("/search-university", "front\AccountController@searchUniversity")
	->name("search.university");

Route::get("/search-country", "front\AccountController@searchCountry")
	->name("search.country");

Route::group(["middleware" => ['auth']], function () {

		Route::any('/chat',Chat::class);
		Route::post('/chat',"Chat@message");
		/*
		|------------------------------------------------------------------------
		| Home
		|------------------------------------------------------------------------
		 */
		Route::get('/home', "DashboardController@index")->name('home');
		/*
		|------------------------------------------------------------------------
		| Show All
		|------------------------------------------------------------------------
		 */
		Route::get('/all', "DashboardController@show")->name('view.all');

		Route::get("/account", "front\AccountController")->name("front.account");

		Route::get("/deactive-reason", "front\AccountController@deactiveUser")->name("deactive.reason");

		Route::get("create-gig", "front\GigController")->name('gig.index');

		Route::get("service/{service}/update", "front\GigController@update")->name('service.update');


		/*
		|------------------------------------------------------------------------
		| Wishlist
		|------------------------------------------------------------------------
		 */
		Route::resource('/wishlist',\front\WishListController::class);
		/*
		|------------------------------------------------------------------------
		| Post Request
		|------------------------------------------------------------------------
		 */
		Route::resource('post-request',\front\PostRequestController::class)->only(['create','store']);
		/*
		|------------------------------------------------------------------------
		| Frontend Order Dashboard
		|------------------------------------------------------------------------
		 */
		Route::get('/orders','front\OrdersController@index')->name('orders.index');
		/*
		|------------------------------------------------------------------------
		| Social Media Login Route Start
		|------------------------------------------------------------------------
		 */

		/*
		|------------------------------------------------------------------------
		| Dribble
		|------------------------------------------------------------------------
		 */
		Route::get('/dribbble-login', 'social\Social')
			->name("dribbble.login")->defaults('driver', 'dribbble');

		Route::get('/dribbble/callback', 'social\Social@handle')
			->name("dribbble.login.callback")->defaults('driver', 'dribbble');
		/*
		|------------------------------------------------------------------------
		| Stack Exchange
		|------------------------------------------------------------------------
		 */
		Route::get('/stack-exchange-login', 'social\Social')
			->name("stack-exchange.login")->defaults('driver', 'stackexchange');

		Route::get('/stack-exchange/callback', 'social\Social@handle')
			->name("stack.exchange.callback")->defaults('driver', 'stackexchange');
		/*
		|------------------------------------------------------------------------
		| Linked In
		|------------------------------------------------------------------------
		 */
		Route::get('/linkedin-login', 'social\Social')
			->name("linkedin.login")->defaults('driver', 'linkedin');

		Route::get('/linkedin/callback', 'social\Social@handle')
			->name("linkedin.callback")->defaults('driver', 'linkedin');
		/*
		|------------------------------------------------------------------------
		| Google
		|------------------------------------------------------------------------
		 */
		Route::get('/google/login', 'social\Social')
			->name("google.social.login")->defaults('driver', 'google');

		Route::get('/google/callback', 'social\Social@handle')
			->name("google.handel")->defaults('driver', 'google');
		/*
		|------------------------------------------------------------------------
		| Facebook
		|------------------------------------------------------------------------
		 */

		Route::get('/facebook/login', 'social\Social')
			->name("facebook.social.login")->defaults('driver', 'facebook');

		Route::get('/facebook/callback', 'social\Social@handle')
			->name("facebook.handel")->defaults('driver', 'facebook');
		/*
		|------------------------------------------------------------------------
		| Github
		|------------------------------------------------------------------------
		 */
		Route::get('/github/login', 'social\Social')
			->name("github.social.login")->defaults('driver', 'github');

		Route::get('/github/callback', 'social\Social@handle')
			->name("github.handel")->defaults('driver', 'github');
		/*
		|------------------------------------------------------------------------
		| Vimeo
		|------------------------------------------------------------------------
		 */
		Route::get('/vimeo/login', 'social\Social')
			->name("vimeo.social.login")->defaults('driver', 'vimeo');

		Route::get('/vimeo/callback', 'social\Social@handle')
			->name("vimeo.handel")->defaults('driver', 'vimeo');
		/*
		|------------------------------------------------------------------------
		| Instagram
		|------------------------------------------------------------------------
		 */
		Route::get('/instagram/login', 'social\Social')
			->name("instagram.social.login")->defaults('driver', 'instagram');

		Route::get('/instagram/callback', 'social\Social@handle')
			->name("instagram.handel")->defaults('driver', 'instagram');
		/*
		|------------------------------------------------------------------------
		| Twitter
		|------------------------------------------------------------------------
		 */
		Route::get('/twitter/login', 'social\Social')
			->name("twitter.social.login")->defaults('driver', 'twitter');

		Route::get('/twitter/callback', 'social\Social@handle')
			->name("twitter.handel")->defaults('driver', 'twitter');
		/*
		|------------------------------------------------------------------------
		| Change User Mode
		|------------------------------------------------------------------------
		 */
		Route::get('change/user/{user}/mode', 'HomeController@mode')->name('user.mode');
		/*
	|------------------------------------------------------------------------
	| Social Media Login Route End
	|------------------------------------------------------------------------
	 */
	});

	Route::get("become-seller", "front\BecomeSeller")->name('become.seller');
	Route::post("get-subcategory", "front\GigController@subCategory")->name("get.subcat");
	Route::get("orders/{gig_id}/{package}","front\OrdersController@store")->name("make.orders");

/*
|------------------------------------------------------------------------
| Seller Routes Start
|------------------------------------------------------------------------
 */
Route::group([
		'prefix'     => 'seller',
		'namespace'  => 'Seller',
		'as'         => 'seller.',
		'middleware' => 'auth'
	], function () {
		/*
		|------------------------------------------------------------------------
		| Seller Dashboard
		|------------------------------------------------------------------------
		 */
		Route::get('dashboard', DashboardController::class )->name('dashboard');
		/*
		|------------------------------------------------------------------------
		| Seller Manage Service
		|------------------------------------------------------------------------
		 */
		Route::get('manage-service', 'GigController@index')->name('gig.index');
		Route::get('manage/service/{service}', 'GigController@destroy')->name('gig.destroy');
		/*
		|------------------------------------------------------------------------
		| Seller Manage Orders
		|------------------------------------------------------------------------
		 */
		Route::get('manage-order', 'OrderController@index')->name('order.index');
		Route::post('manage-order/order/{order}/status', 'OrderController@status')->name('order.status');
		Route::get('cancel/order/{order}',CanceledOrderController::class);
		/*
		|------------------------------------------------------------------------
		| Seller Message System
		|------------------------------------------------------------------------
		 */
		Route::get('message','MessageController@index')->name('message.index');
		Route::post('message','MessageController@sendMessage')->name('message.store');
		Route::post('get-message','MessageController@getMessage')->name('message.show');
		Route::post('message/read','MessageController@readMessage')->name('message.read');
		/*
		|------------------------------------------------------------------------
		| Seller Earning
		|------------------------------------------------------------------------
		 */
		Route::get('/earning',EarningController::class)->name('earning');
		/*
		|------------------------------------------------------------------------
		| Seller Analytics
		|------------------------------------------------------------------------
		 */
		Route::get('/analytics/{analytics?}',AnalyticsController::class)->name('analytics');
		//Route::post('')
		/*
		|------------------------------------------------------------------------
		| Seller Email
		|------------------------------------------------------------------------
		 */
		Route::get('email',EmailController::class)->name('email');
		Route::post('email',"EmailController@storeEmail")->name('email.store');
		Route::post('sendmail',"EmailController@sendMail")->name('email.send');
		/*
	|------------------------------------------------------------------------
	| Seller Routes End
	|------------------------------------------------------------------------
	 */
	});

Route::get('admin/download-email-list', 'Seller\EmailController@downloadEmailList')->middleware(['admin','auth']);

/*
|------------------------------------------------------------------------
| Admin Routes Start
|------------------------------------------------------------------------
 */
Route::group([
		'prefix'    => 'admin',
		'namespace' => 'Admin',
		'as'        => 'admin.'
	], function () {
		/*
		|------------------------------------------------------------------------
		| Login and Logout
		|------------------------------------------------------------------------
		 */
		Route::get('login', 'auth\LoginController@showLoginForm')->name('login');
		Route::post('login', 'auth\LoginController@login')->name('login.check');
		Route::post('logout', 'auth\LoginController@logout')->name('logout');
		/*
		|------------------------------------------------------------------------
		| Admin Route Authenticate
		|------------------------------------------------------------------------
		 */
		Route::middleware(['admin', 'auth'])->group(function () {
				/*
				|------------------------------------------------------------------------
				| Dashbord
				|------------------------------------------------------------------------
				 */
				Route::get('dashboard', 'DashboardController@index')->name('dashboard');

				/*
				|------------------------------------------------------------------------
				| Sub Admin
				|------------------------------------------------------------------------
				 */
				Route::resource('sub-admin', SubAdminController::class );
				/*
				|------------------------------------------------------------------------
				| User
				|------------------------------------------------------------------------
				 */
				Route::resource('user', UserController::class );
				Route::get('user/{user}/status/{status}', 'UserController@status')->name('user.status');
				Route::post('user/{user}/suspend', 'UserController@suspend')->name('user.suspend');
				Route::get('user/search', 'UserController@find')->name('user.search');
				Route::get('user/download/{type}', 'UserController@downloadExcel')->name('user.download');
				Route::get('user/{user}/login', 'UserController@login')->name('user.login');
				Route::get('account/user/token/{token}', 'UserController@verifyToken')->name('user.verifyToken');
				Route::post('reset/password', 'UserController@sendResetLinkEmail')->name('user.resetPassword');
				/*
				|------------------------------------------------------------------------
				| Skill
				|------------------------------------------------------------------------
				 */
				Route::resource('skill', SkillController::class )->except(['create', 'show']);
				/*
				|------------------------------------------------------------------------
				| Qualification
				|------------------------------------------------------------------------
				 */
				Route::resource('qualification', QualificationController::class )->except(['create', 'show']);
				Route::get('qualification/{qualification}/status/{status}', 'QualificationController@status')->name('qualification.status');
				/*
				|------------------------------------------------------------------------
				| Category
				|------------------------------------------------------------------------
				 */
				Route::resource('category', CategoryController::class );
				Route::get('category/{category}/status/{status}', 'CategoryController@status')->name('category.status');
				/*
				|------------------------------------------------------------------------
				| Sub Category
				|------------------------------------------------------------------------
				 */
				Route::resource('sub-category', SubCategoryController::class );
				Route::get('sub-category/{subCategory}/status/{status}', 'SubCategoryController@status')->name('sub-category.status');
				/*
				|------------------------------------------------------------------------
				| Permission
				|------------------------------------------------------------------------
				 */
				Route::post('permission/allotment', PermissionController::class )->name('permission.allot');
				Route::get('permission/user/{user}', 'PermissionController@subAdmin')->name('sub-admin.permission');
				/*
				|------------------------------------------------------------------------
				| Manage Gig
				|------------------------------------------------------------------------
				 */
				Route::get('manage/service', 'GigController@index')->name('manage.gig.index');
				Route::get('manage/gig/{gig}', 'GigController@accept')->name('manage.gig.accept');
				Route::get('manage/gig/{gig}/block', 'GigController@block')->name('manage.gig.block');
				Route::put('manage/gig/{gig}/suspend', 'GigController@suspend')->name('manage.gig.suspend');
				Route::delete('manage/gig/{gig}/delete', 'GigController@destroy')->name('manage.gig.destroy');
				Route::get('manage/gig/{gig}/seller-detail/{page?}', 'GigController@sellerDetail')->name('manage.gig.sellerDetail');
				/*
				|------------------------------------------------------------------------
				| Manage Super Admin Commision
				|------------------------------------------------------------------------
				 */
				Route::post('commision', SuperAdminCommisionController::class )->name('commision');
				Route::get('commision/{id}/{type}', 'SuperAdminCommisionController@show')->name('commision.show');
				Route::post('commision/search', 'SuperAdminCommisionController@search')->name('commision.search');
				/*
				|------------------------------------------------------------------------
				| Manage Orders
				|------------------------------------------------------------------------
				 */
				Route::any('order', OrderController::class )->name('orders');

				/*
				|------------------------------------------------------------------------
				| Service Type
				|------------------------------------------------------------------------
				 */
				Route::resource('option-type', ServiceController::class);
				/*
				|------------------------------------------------------------------------
				| Service Mapping To Category And SubCategory
				|------------------------------------------------------------------------
				 */
				Route::resource('option-map', ServiceMapController::class )->except(['create', 'show', 'edit']);
				Route::get('option-map/get-subcategory', 'ServiceMapController@getSubCategory')->name('option-map.getSubCategory');
				/*
				|------------------------------------------------------------------------|
				| 								Manage Pages					 		 |
				|------------------------------------------------------------------------|
				 */
				Route::group([
						'prefix' => 'pages',
						'as'     => 'pages.'
					], function () {
						/*
						|------------------------------------------------------------------------
						| Press And News
						|------------------------------------------------------------------------
						 */
						Route::resource('press-and-news', PressAndNewsController::class );
						Route::get('press-and-news/{press_and_news}/status', 'PressAndNewsController@status')->name('press-and-news.status');
						/*
						|------------------------------------------------------------------------
						| FAQ
						|------------------------------------------------------------------------
						 */
						Route::resource('faq', FaqController::class );
						Route::get('faq/{faq}/status', 'FaqController@status')->name('faq.status');
						/*
						|------------------------------------------------------------------------
						| Dynamic Pages
						|------------------------------------------------------------------------
						 */
						Route::resource('page', PageController::class );
						Route::get('page/{page}/status', 'PageController@status')->name('page.status');
						/*
					|------------------------------------------------------------------------
					| Admin Routes End
					|------------------------------------------------------------------------
					 */});
			});

	});

Route::get("{page}", "front\CategoryController");
Route::get("{parent}/{child}", "front\PagesController");
Route::get("{parent}/{child}/{id}", "front\JobDetailController");

/*
|------------------------------------------------------------------------
| API Routes
|------------------------------------------------------------------------
*/
Route::post('user/short-description','Api\UserDescription@updateSortDesc');

Route::post("user/avatar","Api\UserAvatar");

Route::post("user/user-skill/destroy","Api\UserSkills@destroy");

Route::post('user/user-education-destroy',"Api\UserEducationController@destroy");
