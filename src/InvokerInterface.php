<?php

namespace Zahran\RobotSimulator;

interface InvokerInterface
{
    public function invoke(array $userInputs, RobotInterface $robot): void;
}
