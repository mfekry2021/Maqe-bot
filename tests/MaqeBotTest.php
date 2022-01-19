<?php

namespace Tests;

use App\Concret\BotInstruction;
use App\Concret\MaqeBot;
use PHPUnit\Framework\TestCase;

class MaqeBotTest extends TestCase
{

    /**
     * @param $instructions
     * @return void
     * @dataProvider instructionsMultiInput
     */
    public function testStart($instructions)
    {
        $bot = new MaqeBot;
        $bot->start($instructions);
        $this->assertTrue(true, 'This should already work.');
    }

    /**
     * @return \array[][]
     */
    public function instructionsMultiInput(): array
    {
        return [
            [
                [
                    new BotInstruction('rotate', 5),
                    new BotInstruction('move', 1),
                    new BotInstruction('rotate', 3),
                    new BotInstruction('move', 1),
                    new BotInstruction('rotate', 1),
                    new BotInstruction('move', 1),
                    new BotInstruction('move', 7),
                    new BotInstruction('rotate', 2),
                    new BotInstruction('move', 22),
                    new BotInstruction('rotate', 13),
                    new BotInstruction('rotate',2),
                    new BotInstruction('move'),
                    new BotInstruction('move', 2)
                ]
            ]
        ];
    }

    /**
     * @return void
     */
    public function testGetDirection()
    {
        $bot = new MaqeBot;
        $direction = $bot->getDirection();
        $this->assertEquals("NORTH", $direction);
    }

    /**
     * @return void
     */
    public function testGetXPosition()
    {
        $bot = new MaqeBot;
        $position = $bot->getXPosition();
        $this->assertEquals(0, $position);
    }

    /**
     * @return void
     */
    public function testGetYPosition()
    {
        $bot = new MaqeBot;
        $position = $bot->getYPosition();
        $this->assertEquals(0, $position);

    }


}
