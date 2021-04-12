<?php

namespace Zahran\RobotSimulator\Commands;

use Zahran\RobotSimulator\RobotInterface;

abstract class AbstractCommand
{
    protected RobotInterface $robot;

    public function __construct(RobotInterface $robot = null)
    {
        if ($robot) {
            $this->setRobot($robot);
        }
    }

    public function getRobot(): RobotInterface
    {
        return $this->robot;
    }

    public function setRobot(RobotInterface $robot): self
    {
        $this->robot = $robot;

        return $this;
    }
}
