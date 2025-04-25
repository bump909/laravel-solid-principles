<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGatewayInterface;
use App\Services\Payments\StripePaymentGateway;
use App\Services\Payments\PaypalPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind based on env setting
        $this->app->bind(PaymentGatewayInterface::class, function () {
            return match (config('services.payment_gateway')) {
                'stripe' => new StripePaymentGateway(),
                default  => new PaypalPaymentGateway(),
            };
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // You can add any bootstrapping logic here if needed
    }
}
