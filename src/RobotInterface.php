<?php

namespace Zahran\RobotSimulator;

interface RobotInterface
{
    public function incrementY(): self;

    public function decrementY(): self;

    public function incrementX(): self;

    public function decrementX(): self;
}
