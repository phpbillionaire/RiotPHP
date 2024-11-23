<?php
namespace App\Endpoints\LOL\ChampionMastery\DTO;

final readonly class ChampionMasteryDto
{
    public function __construct(
        private string $puuid,
        private int $championPointsUntilNextLevel,
        private ?bool $chestGranted,
        private int $championId,
        private int $lastPlayTime,
        private int $championLevel,
        private int $championPoints,
        private int $championPointsSinceLastLevel,
        private int $markRequiredForNextLevel,
        private int $championSeasonMilestone,
        private NextSeasonMilestonesDto $nextSeasonMilestone,
        private int $tokensEarned,
        private ?array $milestoneGrades
    ){}
    public function getPuuid(): string
    {
        return $this->puuid;
    }
    public function getChampionPoints(): int
    {
        return $this->championPoints;
    }
    public function getChampionPointsUntilNextLevel(): int
    {
        return $this->championPointsUntilNextLevel;
    }
    public function isChestGranted(): ?bool
    {
        return $this->chestGranted;
    }
    public function getChampionId(): int
    {
        return $this->championId;
    }
    public function getLastPlayTime(): int
    {
        return $this->lastPlayTime;
    }
    public function getChampionLevel(): int
    {
        return $this->championLevel;
    }
    public function getChampionPointsSinceLastLevel(): int
    {
        return $this->championPointsSinceLastLevel;
    }
    public function getMarkRequiredForNextLevel(): int
    {
        return $this->markRequiredForNextLevel;
    }
    public function getChampionSeasonMilestone(): int
    {
        return $this->championSeasonMilestone;
    }
    public function getNextSeasonMilestone(): NextSeasonMilestonesDto
    {
        return $this->nextSeasonMilestone;
    }
    public function getTokensEarned(): int
    {
        return $this->tokensEarned;
    }
    public function getMilestoneGrades(): ?array
    {
        return $this->milestoneGrades;
    }
}