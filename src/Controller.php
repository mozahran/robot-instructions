<?php

namespace Zahran\RobotSimulator;

use Zahran\RobotSimulator\Commands\AbstractCommand;
use Zahran\RobotSimulator\Commands\CommandInterface;

class Controller implements InvokerInterface
{
    /**
     * @var CommandInterface[]
     */
    protected array $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function invoke(array $userInputs, RobotInterface $robot): void
    {
        foreach ($userInputs as $commandAlias) {
            if (!isset($this->commands[$commandAlias])) {
                throw new \InvalidArgumentException(sprintf('Invalid command "%s".', $commandAlias));
            }
            /** @var AbstractCommand $command */
            $command = $this->commands[$commandAlias];
            $command->setRobot($robot);
            $command->execute();;
        }
    }
}
