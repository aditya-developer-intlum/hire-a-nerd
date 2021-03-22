<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
	/**
	 * This namespace is applied to your controller routes.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';
	protected $affiliateNamespace = "App\Http\Controllers\Affiliate";

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @return void
	 */
	public function boot() {
		//
		parent::boot();
		Route::model('sub-admin', \App\User::class );
		Route::model('press-and-news', \App\PressAndNew::class );
		Route::model('option-type', \App\Models\Scope::class );
		Route::model('option-map', \App\Models\ScopeList::class );
		Route::model('service', \App\Models\Gig::class );
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map() {
		
		$this->mapApiRoutes();

		$this->mapAffiliateRoutes();

		$this->mapWebRoutes();


		//
	}

	/**
	 * Define the "web" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	protected function mapWebRoutes() {
		Route::middleware('web')
			->namespace($this->namespace)
			->group(base_path('routes/web.php'));
	}
	/**
	 * Define the "Affiliate" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	protected function mapAffiliateRoutes() {
		Route::prefix('affiliate')
			->as("affiliate.")
			->middleware('web')
			->namespace($this->affiliateNamespace)
			->group(base_path('routes/affiliate.php'));

	}

	/**
	 * Define the "api" routes for the application.
	 *
	 * These routes are typically stateless.
	 *
	 * @return void
	 */
	protected function mapApiRoutes() {
		Route::prefix('api')
			->middleware('api')
			->namespace($this->namespace)
			->group(base_path('routes/api.php'));
	}
}
