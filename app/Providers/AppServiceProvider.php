<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\thongtinlienlac;
use Illuminate\Pagination\Paginator;

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
        view()->composer('*', function ($view) {
            $view->with('thongtinlienlac', thongtinlienlac::first());
        });

        Paginator::useBootstrap();  // Sử dụng Bootstrap cho phân trang
    }
}
