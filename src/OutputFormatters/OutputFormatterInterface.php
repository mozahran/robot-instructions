<?php

namespace Zahran\RobotSimulator\OutputFormatters;

interface OutputFormatterInterface
{
    public function format(array $position): mixed;
}
