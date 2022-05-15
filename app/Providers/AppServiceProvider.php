<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// fachada esquema
use Illuminate\Support\Facades\Schema;
// paginador
use Illuminate\Pagination\Paginator;

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
        // llamamos al paginador y al esquema
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
