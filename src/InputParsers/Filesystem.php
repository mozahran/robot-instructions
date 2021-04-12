<?php

namespace Zahran\RobotSimulator\InputParsers;

class Filesystem implements InputParserInterface
{
    public function parse($data): array
    {
        if (!file_exists($data)) {
            throw new \Exception(sprintf('File "%s" does not exist!', $data));
        }

        // we can add more validation rules but this is just an example.

        $result = [];
        $lines = explode("\n", file_get_contents($data));


        foreach ($lines as $line) {
            if ($line === '') {
                continue;
            }
            $result[] = str_split($line);
        }

        return $result;
    }
}
