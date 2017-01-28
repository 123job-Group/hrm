<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::addNamespace('pim', base_path('app/Modules/Pim/resources/views'));
        View::addNamespace('settings', base_path('app/Modules/Settings/resources/views'));
        View::addNamespace('leave', base_path('app/Modules/Leave/resources/views'));
        View::addNamespace('recruitment', base_path('app/Modules/Recruitment/resources/views'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
