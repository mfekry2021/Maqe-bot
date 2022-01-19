<?php

namespace Tests;

use App\Concret\BotInstruction;
use PHPUnit\Framework\TestCase;

class BotInstructionTest extends TestCase
{

    public function testGetSteps()
    {
        $instruction = new BotInstruction('rotate');
        $type = $instruction->getType();
        $this->assertEquals('rotate', $type);
    }

    public function testGetType()
    {
        $instruction = new BotInstruction('move',13);
        $steps = $instruction->getSteps();
        $this->assertEquals(13, $steps);
    }
}
