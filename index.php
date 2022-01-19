<?php

use App\Concret\MaqeBot;
use App\Concret\Task1Parser;

require_once realpath("vendor/autoload.php");

$parsedInputCommands = (new Task1Parser())->parse($argv[1]);
$bot = new MaqeBot();
$bot->start($parsedInputCommands);
echo "X: " . $bot->getXPosition() . " Y: " . $bot->getYPosition() . " Direction: " . $bot->getDirection();

