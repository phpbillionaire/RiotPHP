<?php
namespace RiotGamesPHP\Endpoints\LOL\Clash\DTO;

final readonly class TournamentPhaseDto
{
    private int $id;
    private int $registrationTime;
    private int $startTime;
    private bool $cancelled;
    public function __construct(int $id, int $registrationTime, int $startTime, bool $cancelled)
    {
        $this->id = $id;
        $this->registrationTime = $registrationTime;
        $this->startTime = $startTime;
        $this->cancelled = $cancelled;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getRegistrationTime(): int
    {
        return $this->registrationTime;
    }
    public function getStartTime(): int
    {
        return $this->startTime;
    }
    public function isCancelled(): bool
    {
        return $this->cancelled;
    }
}