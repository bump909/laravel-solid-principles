<?php

namespace App\Repositories;

interface OrderRepositoryInterface
{
    public function find(int $id): array;
    public function all(): array;
}
