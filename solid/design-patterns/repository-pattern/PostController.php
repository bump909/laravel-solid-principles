<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PostRepositoryInterface;

class PostController
{
    protected PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index(): array
    {
        return $this->postRepository->all();
    }
}
