<?php

namespace Zahran\RobotSimulator\InputParsers;

class PlainText implements InputParserInterface
{
    public function parse($data): array
    {
        if (!is_string($data)) {
            throw new \TypeError('Invalid type of $userInput. It must be string.');
        }

        return str_split($data);
    }
}
