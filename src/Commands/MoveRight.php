<?php

namespace Zahran\RobotSimulator\Commands;

class MoveRight extends AbstractCommand implements CommandInterface
{
    public function execute(): void
    {
        $this->robot->incrementX();
    }
}
