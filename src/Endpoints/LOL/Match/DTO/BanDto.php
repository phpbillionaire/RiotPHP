<?php
namespace App\Endpoints\LOL\Match\DTO;

final readonly class BanDto
{
    private int $championId;
    private int $pickTurn;
    public function __construct(int $championId, int $pickTurn)
    {
        $this->championId = $championId;
        $this->pickTurn = $pickTurn;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function getPickTurn(): int
    {
        return $this->pickTurn;
    }

}