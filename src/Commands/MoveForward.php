<?php

namespace Zahran\RobotSimulator\Commands;

class MoveForward extends AbstractCommand implements CommandInterface
{
    public function execute(): void
    {
        $this->robot->incrementY();
    }
}
