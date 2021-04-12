<?php

use Zahran\RobotSimulator\Commands\MoveRight;
use PHPUnit\Framework\TestCase;
use Zahran\RobotSimulator\Robot;

class MoveRightTest extends TestCase
{
    public function testExecute()
    {
        $command = new MoveRight();
        $robot = new Robot();
        $command->setRobot($robot);
        $command->execute();
        list($x, $y) = $robot->getPosition();
        $this->assertEquals(1, $x);
        $this->assertEquals(0, $y);
    }
}
