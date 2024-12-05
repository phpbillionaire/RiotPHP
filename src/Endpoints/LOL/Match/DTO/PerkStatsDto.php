<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;
final readonly class PerkStatsDto
{
    private int $defense;
    private int $flex;
    private int $offense;
    public function __construct(int $defense, int $flex, int $offense)
    {
        $this->defense = $defense;
        $this->flex = $flex;
        $this->offense = $offense;
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function getFlex(): int
    {
        return $this->flex;
    }

    public function getOffense(): int
    {
        return $this->offense;
    }

}