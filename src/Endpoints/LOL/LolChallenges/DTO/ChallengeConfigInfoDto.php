<?php
namespace App\Endpoints\LOL\LolChallenges\DTO;

final readonly class ChallengeConfigInfoDto
{
    private int $id;
    private array $localizedNames;
    private string $state;
    private string $tracking;
    private int $startTimestamp;
    private int $endTimestamp;
    private bool $leaderboard;
    private array $thresholds;

    // Конструктор
    public function __construct(
        int $id,
        array $localizedNames,
        string $state,
        string $tracking,
        int $startTimestamp,
        int $endTimestamp,
        bool $leaderboard,
        array $thresholds
    ) {
        $this->id = $id;
        $this->localizedNames = $localizedNames;
        $this->state = $state;
        $this->tracking = $tracking;
        $this->startTimestamp = $startTimestamp;
        $this->endTimestamp = $endTimestamp;
        $this->leaderboard = $leaderboard;
        $this->thresholds = $thresholds;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLocalizedNames(): array
    {
        return $this->localizedNames;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getTracking(): string
    {
        return $this->tracking;
    }

    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
    }

    public function getEndTimestamp(): int
    {
        return $this->endTimestamp;
    }

    public function isLeaderboard(): bool
    {
        return $this->leaderboard;
    }

    public function getThresholds(): array
    {
        return $this->thresholds;
    }

}