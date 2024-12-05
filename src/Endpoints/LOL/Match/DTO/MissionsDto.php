<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;

final readonly class MissionsDto
{
    public function __construct(
        private int $playerScore0,
        private int $playerScore1,
        private int $playerScore2,
        private int $playerScore3,
        private int $playerScore4,
        private int $playerScore5,
        private int $playerScore6,
        private int $playerScore7,
        private int $playerScore8,
        private int $playerScore9,
        private int $playerScore10,
        private int $playerScore11
    ) {}

    public function getPlayerScore0(): int
    {
        return $this->playerScore0;
    }

    public function getPlayerScore1(): int
    {
        return $this->playerScore1;
    }

    public function getPlayerScore2(): int
    {
        return $this->playerScore2;
    }

    public function getPlayerScore3(): int
    {
        return $this->playerScore3;
    }

    public function getPlayerScore4(): int
    {
        return $this->playerScore4;
    }

    public function getPlayerScore5(): int
    {
        return $this->playerScore5;
    }

    public function getPlayerScore6(): int
    {
        return $this->playerScore6;
    }

    public function getPlayerScore7(): int
    {
        return $this->playerScore7;
    }

    public function getPlayerScore8(): int
    {
        return $this->playerScore8;
    }

    public function getPlayerScore9(): int
    {
        return $this->playerScore9;
    }

    public function getPlayerScore10(): int
    {
        return $this->playerScore10;
    }

    public function getPlayerScore11(): int
    {
        return $this->playerScore11;
    }

}