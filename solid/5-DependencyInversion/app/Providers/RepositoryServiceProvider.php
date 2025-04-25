<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\OrderRepositoryInterface;
use App\Repositories\DatabaseOrderRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(OrderRepositoryInterface::class, DatabaseOrderRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
