<?php

namespace App\Services\Invoices;

use App\Repositories\InvoiceRepository;
use App\Services\Invoices\InvoiceMailer;

class InvoiceService
{
    protected InvoiceRepository $repository;
    protected InvoiceMailer $mailer;

    public function __construct(InvoiceRepository $repository, InvoiceMailer $mailer)
    {
        $this->repository = $repository;
        $this->mailer = $mailer;
    }

    public function createInvoice(array $data): string
    {
        $invoice = $this->repository->store($data);
        $this->mailer->send($invoice['email'], $invoice);

        return "Invoice for {$invoice['amount']} created and emailed to {$invoice['email']}.";
    }
}
