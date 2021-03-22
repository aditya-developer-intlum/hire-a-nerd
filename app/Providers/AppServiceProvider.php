<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
use App\Setting;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $setting =  Setting::first();
        $user = User::where('type',1)->first();
        
        View::share('setting',$setting);
        
        Blade::directive('doller', function ($money = 0) {
            
            return "$<?php echo number_format($money, 2); ?>";

        });

        if ($setting && $setting->is_cookie_enabled) {
            Cookie::queue("super_affiliate",$user->id, 6000000000);
        }else{
            Cookie::queue(Cookie::forget('super_affiliate'));
        }
    }
}
