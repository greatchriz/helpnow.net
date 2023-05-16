<?php

namespace App\Providers;

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
        //make pages available to all views
        // view()->composer('*', function ($view) {
        //     $view->with('pages', \App\Models\Page::all());
        // });
    }
}
