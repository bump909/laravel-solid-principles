<?php

namespace App\Workers;

class HumanWorker implements WorkerInterface, EaterInterface
{
    public function work(): string
    {
        return "Human is working.";
    }

    public function eat(): string
    {
        return "Human is eating lunch.";
    }
}
