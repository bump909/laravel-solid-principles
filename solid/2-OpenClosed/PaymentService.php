<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class PaymentService
{
    protected PaymentGatewayInterface $gateway;

    public function __construct(PaymentGatewayInterface $gateway)
    {
        // Inject any payment gateway that follows the interface
        $this->gateway = $gateway;
    }

    public function processPayment(float $amount): string
    {
        // Open for extension: Swap Stripe/PayPal without modifying this logic
        return $this->gateway->charge($amount);
    }
}
