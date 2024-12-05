<?php
namespace RiotGamesPHP\Endpoints\LOL\ChampionMastery\DTO;
final readonly class RewardConfigDto
{
    private ?string $rewardValue;
    private ?string $rewardType;
    private ?int $maximumReward;
    public function __construct(?string $rewardValue, ?string $rewardType, ?int $maximumReward)
    {
        $this->rewardValue = $rewardValue;
        $this->rewardType = $rewardType;
        $this->maximumReward = $maximumReward;
    }
    public function getRewardValue(): ?string
    {
        return $this->rewardValue;
    }
    public function getRewardType(): ?string
    {
        return $this->rewardType;
    }
    public function getMaximumReward(): ?int
    {
        return $this->maximumReward;
    }
}