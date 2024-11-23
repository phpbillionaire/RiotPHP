<?php
namespace App\Endpoints\LOL\ChampionMastery;
final readonly class NextSeasonMilestonesDto
{
    private array $requireGradeCounts;
    private int $rewardMarks;
    private bool $bonus;
    private ?RewardConfigDto $RewardConfig;

    public function __construct(array $requireGradeCounts, int $rewardMarks, bool $bonus, ?RewardConfigDto $RewardConfig)
    {
        $this->requireGradeCounts = $requireGradeCounts;
        $this->rewardMarks = $rewardMarks;
        $this->bonus = $bonus;
        $this->RewardConfig = $RewardConfig;
    }
    public function getRequireGradeCounts(): object
    {
        return $this->requireGradeCounts;
    }
    public function getRewardMarks(): int
    {
        return $this->rewardMarks;
    }
    public function getBonus(): bool
    {
        return $this->bonus;
    }
    private function getRewardConfig(): RewardConfigDto
    {
        return $this->RewardConfig;
    }
}