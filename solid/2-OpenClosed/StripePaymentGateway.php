<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGatewayInterface;

class StripePaymentGateway implements PaymentGatewayInterface
{
    public function charge(float $amount): string
    {
        // Simulate charging via Stripe API
        return "Charged \${$amount} using Stripe";
    }
}
