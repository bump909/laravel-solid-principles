<?php

namespace App\Http\Controllers;

use App\Services\InvoiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class InvoiceController extends Controller
{
    protected InvoiceService $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }

    public function store(Request $request)
    {
        $data = $request->only(['amount', 'email', 'description']);

        $message = $this->invoiceService->createInvoice($data);

        return Response::json(['message' => $message]);
    }
}
