<?php

namespace Zahran\RobotSimulator;

class Robot implements RobotInterface
{
    protected int $x = 0;

    protected int $y = 0;

    public function getPosition(): array
    {
        return [$this->x, $this->y];
    }

    public function incrementY(): self
    {
        $this->y++;

        return $this;
    }

    public function decrementY(): self
    {
        $this->y--;

        return $this;
    }

    public function incrementX(): self
    {
        $this->x++;

        return $this;
    }

    public function decrementX(): self
    {
        $this->x--;

        return $this;
    }
}
