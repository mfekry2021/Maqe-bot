<?php

namespace App\Interfaces;


interface BotInterface
{
    /**
     * @return int
     */
    public function getXPosition(): int;

    /**
     * @return int
     */
    public function getYPosition(): int;

    /**
     * @return string
     */
    public function getDirection(): string;

    /**
     * @param array $instructionActions
     * @return void
     */
    public function start(array $instructionActions): void;
}
