<?php

namespace App\Concret;

use App\Interfaces\InputParserInterface;

class Task1Parser implements InputParserInterface
{

    /**
     * @param string $commandText
     * @return  array
     */
    public function parse(string $commandText): array
    {
        $inputReplacedRWithL = str_replace("R", "LLL", strtoupper($commandText));
        $inputReplacedWdPattern = preg_replace("/(W(\d+))/i", ",$2,", $inputReplacedRWithL);
        $instructionArray = explode(',', $inputReplacedWdPattern);
        $parsedInput = [];
        for ($i = 0; $i < count($instructionArray); $i += 2) {
            $parsedInput[] = new BotInstruction('rotate', strlen($instructionArray[$i]));
            $parsedInput[] = new BotInstruction('move', $commands[$i + 1] ?? 0);
        }

        return $parsedInput;
    }
}
