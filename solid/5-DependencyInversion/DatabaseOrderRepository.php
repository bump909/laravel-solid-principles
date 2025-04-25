<?php

namespace App\Repositories;

class DatabaseOrderRepository implements OrderRepositoryInterface
{
    public function find(int $id): array
    {
        return ['id' => $id, 'item' => 'Sample Product'];
    }

    public function all(): array
    {
        return [
            ['id' => 1, 'item' => 'Product 1'],
            ['id' => 2, 'item' => 'Product 2'],
        ];
    }
}
