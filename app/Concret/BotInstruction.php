<?php

namespace App\Concret;

use App\Interfaces\InstructionInterface;

class BotInstruction implements InstructionInterface
{
    /**
     * @var string
     */
    private string $type;

    /**
     * @var int
     */
    private int $steps;

    public function __construct(string $type, int $steps = 0)
    {
        $this->type = $type;
        $this->steps = $steps;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getSteps(): int
    {
        return $this->steps;
    }
}