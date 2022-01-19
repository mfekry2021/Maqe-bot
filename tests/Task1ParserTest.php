<?php

namespace Tests;

use App\Concret\Task1Parser;
use PHPUnit\Framework\TestCase;

class Task1ParserTest extends TestCase
{

    /**
     * @return void
     */
    public function testParse()
    {
        $cli = new Task1Parser();
        $parsedInput = $cli->parse("W5RW5RW2RW1R");
        $this->assertCount(10, $parsedInput);
        $this->assertInstanceOf('App\Interfaces\InstructionInterface',$parsedInput[0]);
    }
}
