<?php
namespace App\Endpoints\LOL\League\DTO;

use App\Endpoints\LOL\LeagueExp\DTO\MiniSiriesDto;

final readonly class LeagueEntryDto
{
    public function __construct(
        private string $leagueId,
        private string $summonerId,
        private string $queueType,
        private string $tier,
        private string $rank,
        private int $leaguePoints,
        private int $wins,
        private int $losses,
        private bool $hotStreak,
        private bool $veteran,
        private bool $freshBlood,
        private bool $inactive,
        private MiniSiriesDto $miniSiries,
    ){}

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getQueueType(): string
    {
        return $this->queueType;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function isHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function isVeteran(): bool
    {
        return $this->veteran;
    }

    public function isFreshBlood(): bool
    {
        return $this->freshBlood;
    }

    public function isInactive(): bool
    {
        return $this->inactive;
    }

    public function getMiniSiries(): MiniSiriesDto
    {
        return $this->miniSiries;
    }

}