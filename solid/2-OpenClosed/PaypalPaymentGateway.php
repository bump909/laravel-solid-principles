<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGatewayInterface;

class PaypalPaymentGateway implements PaymentGatewayInterface
{
    public function charge(float $amount): string
    {
        // Simulate charging via PayPal API
        return "Charged \${$amount} using PayPal";
    }
}
