<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\OrderService;
use App\Repositories\OrderRepositoryInterface;

class OrderServiceTest extends TestCase
{
    public function test_get_order_returns_correct_data()
    {
        $mockRepo = $this->createMock(OrderRepositoryInterface::class);
        $mockRepo->method('find')->willReturn(['id' => 1, 'item' => 'Test Item']);

        $service = new OrderService($mockRepo);

        $order = $service->getOrder(1);

        $this->assertEquals(['id' => 1, 'item' => 'Test Item'], $order);
    }
}
