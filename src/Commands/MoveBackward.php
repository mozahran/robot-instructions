<?php

namespace Zahran\RobotSimulator\Commands;

class MoveBackward extends AbstractCommand implements CommandInterface
{
    public function execute(): void
    {
        $this->robot->decrementY();
    }
}
