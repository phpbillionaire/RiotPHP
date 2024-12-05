<?php
namespace RiotGamesPHP\Endpoints\LOL\LeagueExp\DTO;

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
        private MiniSiriesDto $miniSeries
    ){}

    public function getMiniSeries(): MiniSiriesDto
    {
        return $this->miniSeries;
    }

    public function isInactive(): bool
    {
        return $this->inactive;
    }

    public function isFreshBlood(): bool
    {
        return $this->freshBlood;
    }

    public function isVeteran(): bool
    {
        return $this->veteran;
    }

    public function isHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function getQueueType(): string
    {
        return $this->queueType;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

}