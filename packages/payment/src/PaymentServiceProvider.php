<?php

namespace Payment\Payment;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Payment\Payment\Contracts\PaymentGateway', 'Payment\Payment\PaymentGateways\PaystackGateway');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // include __DIR__.'/routes.php';
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
