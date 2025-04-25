<?php

namespace App\Strategies;

class PaymentContext
{
    protected PaymentStrategy $strategy;

    public function setStrategy(PaymentStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function pay(float $amount): string
    {
        return $this->strategy->pay($amount);
    }
}
