<?php

namespace Zahran\RobotSimulator\InputParsers;

interface InputParserInterface
{
    public function parse($data): array;
}
