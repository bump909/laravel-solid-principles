<?php

namespace App\Repositories\Contracts;

interface PostRepositoryInterface
{
    public function all(): array;
    public function find(int $id): array;
}
