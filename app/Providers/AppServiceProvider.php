<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
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
        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            $cart = Session::get('cart', []); // nhận tt gh từ session
            $totalQuantity = array_sum(array_column($cart, 'quantity'));
            $view->with('totalQuantity', $totalQuantity);
        });
    }
}