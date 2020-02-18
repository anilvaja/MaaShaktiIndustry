<?php

namespace App\Providers;

use App\Navigation;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        View::composer('*', function($view)
        {
            $main_navigations= Navigation::all();
            $view->with('main_menu', $main_navigations);
        });
    }
}
