<?php

namespace App\Services;

use App\Repositories\OrderRepositoryInterface;

class OrderService
{
    protected OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getOrder(int $id): array
    {
        return $this->orderRepository->find($id);
    }
}
