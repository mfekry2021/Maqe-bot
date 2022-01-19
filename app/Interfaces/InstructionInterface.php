<?php

namespace App\Interfaces;


interface InstructionInterface
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return int
     */
    public function getSteps(): int;

}