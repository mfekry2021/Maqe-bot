<?php

namespace App\Interfaces;


interface InputParserInterface
{
    /**
     * @param string $commandText
     * @return array contain each diction command followed by steps
     */
    public function parse(string $commandText): array;

}
