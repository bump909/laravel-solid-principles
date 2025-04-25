<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\OrderRepositoryInterface;
use App\Repositories\DatabaseOrderRepository;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\EloquentPostRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(OrderRepositoryInterface::class, DatabaseOrderRepository::class);
        $this->app->bind(PostRepositoryInterface::class, EloquentPostRepository::class);
    }

    public function boot(): void {}
}
