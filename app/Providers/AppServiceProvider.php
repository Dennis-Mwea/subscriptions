<?php

namespace App\Providers;

use Braintree_Configuration;
use Laravel\Cashier\Cashier;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Braintree_Configuration::environment(env('BRAINTREE_ENV'));
        Braintree_Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
        Braintree_Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
        Braintree_Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));

        Cashier::useCurrency('eur', '€');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
