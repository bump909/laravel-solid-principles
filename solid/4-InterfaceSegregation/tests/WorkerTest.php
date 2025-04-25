<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Workers\HumanWorker;
use App\Workers\RobotWorker;

class WorkerTest extends TestCase
{
    public function test_human_worker_can_work_and_eat()
    {
        $worker = new HumanWorker();

        $this->assertEquals("Human is working.", $worker->work());
        $this->assertEquals("Human is eating lunch.", $worker->eat());
    }

    public function test_robot_worker_only_works()
    {
        $worker = new RobotWorker();

        $this->assertEquals("Robot is working 24/7.", $worker->work());
    }
}
