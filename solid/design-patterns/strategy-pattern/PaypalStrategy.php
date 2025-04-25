<?php

namespace App\Strategies;

class PaypalStrategy implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Paid {$amount} using PayPal.";
    }
}
