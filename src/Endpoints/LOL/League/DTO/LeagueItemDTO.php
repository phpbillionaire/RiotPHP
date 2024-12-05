<?php
namespace RiotGamesPHP\Endpoints\LOL\League\DTO;

use RiotGamesPHP\Endpoints\LOL\LeagueExp\DTO\MiniSiriesDto;

final readonly class LeagueItemDTO
{
    public function __construct(
      private bool $freshBlood,
      private int $wins,
      private MiniSiriesDto $miniSiries,
      private bool $inactive,
      private bool $veteran,
      private bool $hotStreak,
      private string $rank,
      private int $leaguePoints,
      private int $losses,
      private string $summonerId
    ){}

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function isHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function isVeteran(): bool
    {
        return $this->veteran;
    }

    public function isInactive(): bool
    {
        return $this->inactive;
    }

    public function getMiniSiries(): MiniSiriesDto
    {
        return $this->miniSiries;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function isFreshBlood(): bool
    {
        return $this->freshBlood;
    }

}