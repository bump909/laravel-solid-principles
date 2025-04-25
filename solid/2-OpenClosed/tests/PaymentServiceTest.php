<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase; // Ensure PHPUnit is installed via Composer
use App\Services\PaymentService;
use App\Services\Payments\PaypalPaymentGateway;
use App\Services\Payments\StripePaymentGateway;

class PaymentServiceTest extends TestCase
{
    public function test_paypal_payment()
    {
        $gateway = new PaypalPaymentGateway();
        $service = new PaymentService($gateway);

        $response = $service->processPayment(99.99);

        $this->assertEquals('Charged $99.99 using PayPal', $response);
    }

    public function test_stripe_payment()
    {
        $gateway = new StripePaymentGateway();
        $service = new PaymentService($gateway);

        $response = $service->processPayment(49.99);

        $this->assertEquals('Charged $49.99 using Stripe', $response);
    }
}
