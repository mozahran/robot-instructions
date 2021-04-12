<?php

namespace Zahran\RobotSimulator\OutputFormatters;

class Html implements OutputFormatterInterface
{
    public function format(array $position): string
    {
        list($x, $y) = $position;

        return sprintf('x=%d y=%d', $x, $y);
    }
}
