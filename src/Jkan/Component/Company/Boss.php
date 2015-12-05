<?php

namespace Jkan\Component\Company;

use Jkan\Component\Company\Worker;

class Boss
{
    private $worker;

    public function __construct(Worker $worker)
    {
        $this->worker = $worker;
    }

    public function work()
    {
        $this->worker->work();
    }
}