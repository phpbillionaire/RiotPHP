<?php
namespace App\Endpoints\LOL\LeagueExp\DTO;
final readonly class MiniSiriesDto
{
    private int $losses;
    private string $progress;
    private int $target;
    private int $wins;
    public function __construct(int $losses, string $progress, int $target, int $wins)
    {
        $this->losses = $losses;
        $this->progress = $progress;
        $this->target = $target;
        $this->wins = $wins;
    }
    public function getWins(): int
    {
        return $this->wins;
    }

    public function getTarget(): int
    {
        return $this->target;
    }

    public function getProgress(): string
    {
        return $this->progress;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }
}