<?php

namespace App\Providers;

use App\Models\Artical;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // to run it in config/app.php
        $settings = Setting::findOrFail(1);
        View::share('settings', $settings);
        
        $heroArtical = Artical::findOrFail(1);
        $aboutArtical = Artical::findOrFail(2);
        $featureArtical = Artical::findOrFail(3);
        View::share('heroArtical', $heroArtical);
        View::share('aboutArtical', $aboutArtical);
        View::share('featureArtical', $featureArtical);
    }
}
