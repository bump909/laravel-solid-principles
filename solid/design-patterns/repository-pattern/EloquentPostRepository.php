<?php

namespace App\Repositories;

use App\Repositories\Contracts\PostRepositoryInterface;

class EloquentPostRepository implements PostRepositoryInterface
{
    public function all(): array
    {
        return [
            ['id' => 1, 'title' => 'First Post'],
            ['id' => 2, 'title' => 'Second Post']
        ];
    }

    public function find(int $id): array
    {
        return ['id' => $id, 'title' => 'Some Post'];
    }
}
