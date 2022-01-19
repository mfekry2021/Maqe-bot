<?php

namespace App\Concret;

use App\Interfaces\BotInterface;

class MaqeBot implements BotInterface
{
    private const DIRECTION = [0 => "EAST", 90 => "NORTH", 180 => "WEST", 270 => "SOUTH"];

    /**
     * @var int
     */

    private int $yPosition;
    /**
     * @var int
     */

    private int $angel;
    /**
     * @var int
     */
    private int $xPosition;

    public function __construct()
    {
        $this->xPosition = 0;
        $this->yPosition = 0;
        $this->angel = 90;
    }

    /**
     * @return int
     */
    public function getXPosition(): int
    {
        return $this->xPosition;
    }

    /**
     * @return int
     */
    public function getYPosition(): int
    {
        return $this->yPosition;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return self::DIRECTION[$this->angel];
    }

    /**
     * @param array $instructionActions
     * @return void
     */
    public function start(array $instructionActions): void
    {
        foreach ($instructionActions as $action) {
            switch ($action->getType()) {
                case "rotate":
                    $angel = $this->calculateAngel($action->getSteps());
                    $this->setAngel($angel);
                    break;
                case "move":
                    $this->move($action->getSteps());
                    break;
            }
        }
    }

    /**
     * @param int $steps
     * @return int
     */
    private function calculateAngel(int $steps): int
    {
        return ($this->angel + $steps * 90) % 360;
    }

    /**
     * @param $value
     * @return void
     */
    private function setAngel($value)
    {
        $this->angel = $value;
    }

    /**
     * @param int $steps
     * @return void
     */
    private function move(int $steps = 0)
    {
        switch ($this->angel) {
            case 0:
                $this->xPosition = $this->xPosition + $steps;
                break;
            case 90:
                $this->yPosition = $this->yPosition + $steps;
                break;
            case 180:
                $this->xPosition = $this->xPosition - $steps;
                break;
            case 270:
                $this->yPosition = $this->yPosition - $steps;
                break;
        }
    }

}
