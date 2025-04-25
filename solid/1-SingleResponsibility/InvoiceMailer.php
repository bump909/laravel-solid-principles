<?php

namespace App\Services\Invoices;

class InvoiceMailer
{
    public function send(string $to, array $invoice): void
    {
        // Simulate sending an email
        echo "Sending invoice #{$invoice['id']} to {$to}\n";
    }
}
