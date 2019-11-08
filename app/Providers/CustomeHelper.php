<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomeHelper extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once  app_path("Http/Helpers/Nerd.php");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
