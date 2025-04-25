<?php

namespace App\Workers;

class RobotWorker implements WorkerInterface
{
    public function work(): string
    {
        return "Robot is working 24/7.";
    }
}
