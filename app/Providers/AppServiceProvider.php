<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
