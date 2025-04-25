<?php

namespace App\Http\Controllers;

use App\Services\OrderService;

class OrderController
{
    protected OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function show(int $id): array
    {
        return $this->orderService->getOrder($id);
    }
}
