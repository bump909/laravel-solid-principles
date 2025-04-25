<?php

namespace App\Workers;

interface WorkerInterface
{
    public function work(): string;
}
