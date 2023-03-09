<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Course;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('courses', Course::all());
        View::share('settings', Setting::all());
    }
}
