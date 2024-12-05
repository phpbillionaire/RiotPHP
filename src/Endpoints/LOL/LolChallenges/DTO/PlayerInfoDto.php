<?php
namespace RiotGamesPHP\Endpoints\LOL\LolChallenges\DTO;
final readonly class PlayerInfoDto
{
    private array $challenges;
    private array $preferences;
    private array $totalPoints;
    private array $categoryPoints;
    public function __construct(array $challenges, array $preferences, array $totalPoints, array $categoryPoints)
    {
        $this->challenges = $challenges;
        $this->preferences = $preferences;
        $this->totalPoints = $totalPoints;
        $this->categoryPoints = $categoryPoints;
    }
    public function getChallenges(): array
    {
        return $this->challenges;
    }

    public function getPreferences(): array
    {
        return $this->preferences;
    }

    public function getTotalPoints(): array
    {
        return $this->totalPoints;
    }

    public function getCategoryPoints(): array
    {
        return $this->categoryPoints;
    }

}