<?php
namespace App\Endpoints\LOL\Clash\DTO;

final readonly class TournamentDto
{
    private int $id;
    private int $themeId;
    private string $nameKey;
    private string $nameKeySecondary;
    private TournamentPhaseDto $schedule;
    public function __construct(int $id, int $themeId, string $nameKey, string $nameKeySecondary, TournamentPhaseDto $schedule)
    {
        $this->id = $id;
        $this->themeId = $themeId;
        $this->nameKey = $nameKey;
        $this->nameKeySecondary = $nameKeySecondary;
        $this->schedule = $schedule;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getThemeId(): int
    {
        return $this->themeId;
    }
    public function getNameKey(): string
    {
        return $this->nameKey;
    }
    public function getNameKeySecondary(): string
    {
        return $this->nameKeySecondary;
    }
    public function getSchedule(): TournamentPhaseDto
    {
        return $this->schedule;
    }
}