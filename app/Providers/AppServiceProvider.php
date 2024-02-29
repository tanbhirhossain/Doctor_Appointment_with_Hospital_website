<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Using Closure based composers...
         View::composer('*', function ($view) {
            // Retrieve the setting data
            $setting = Setting::first();
            
            // Pass the setting data to all views
            $view->with('site_setting', $setting);
        });
    }
}
