<?php

namespace Zahran\RobotSimulator\Commands;

class MoveLeft extends AbstractCommand implements CommandInterface
{
    public function execute(): void
    {
        $this->robot->decrementX();
    }
}
