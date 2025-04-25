<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Invoices\InvoiceService;
use App\Repositories\InvoiceRepository;
use App\Services\Invoices\InvoiceMailer;

class InvoiceServiceTest extends TestCase
{
    public function test_invoice_creation_and_email_sending()
    {
        $repository = new InvoiceRepository();
        $mailer = $this->createMock(InvoiceMailer::class);

        $mailer->expects($this->once())
            ->method('send')
            ->with(
                $this->equalTo('client@example.com'),
                $this->arrayHasKey('amount')
            );

        $service = new InvoiceService($repository, $mailer);

        $message = $service->createInvoice([
            'amount' => 250.00,
            'email' => 'client@example.com',
            'description' => 'Web Development'
        ]);

        $this->assertStringContainsString('created and emailed to client@example.com', $message);
    }
}
