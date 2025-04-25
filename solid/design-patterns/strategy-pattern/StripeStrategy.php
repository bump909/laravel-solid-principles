<?php

namespace App\Strategies;

class StripeStrategy implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Paid {$amount} using Stripe.";
    }
}
