<?php

namespace Zahran\RobotSimulator\OutputFormatters;

class Json implements OutputFormatterInterface
{
    public function format(array $position): string
    {
        list($x, $y) = $position;
        return json_encode(compact('x', 'y'));
    }
}
