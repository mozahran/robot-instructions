<?php

ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

$filesystemInputParser = new \Zahran\RobotSimulator\InputParsers\Filesystem();
$instructionsList = $filesystemInputParser->parse(getcwd() . '/src/files/instructions.txt');

$commandsList = [
    'F' => new \Zahran\RobotSimulator\Commands\MoveForward(),
    'B' => new \Zahran\RobotSimulator\Commands\MoveBackward,
    'R' => new \Zahran\RobotSimulator\Commands\MoveRight,
    'L' => new \Zahran\RobotSimulator\Commands\MoveLeft,
];

$controller = new \Zahran\RobotSimulator\Controller($commandsList);
$jsonOutputFormatter = new \Zahran\RobotSimulator\OutputFormatters\Json();

echo '<pre>';

foreach ($instructionsList as $instructions) {
    // we can either create a robot for each instruction or reuse one instance and add a reset position method.
    $robot = new \Zahran\RobotSimulator\Robot();
    $controller->invoke($instructions, $robot);
    echo $jsonOutputFormatter->format($robot->getPosition()) . PHP_EOL;
}
