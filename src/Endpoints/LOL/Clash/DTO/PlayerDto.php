<?php
namespace App\Endpoints\LOL\Clash\DTO;
final readonly class PlayerDto
{
    private string $summonerId;
    private ?string $teamId;
    private string $position;
    private string $role;
    public function __construct(string $summonerId, ?string $teamId, string $position, string $role)
    {
        $this->summonerId = $summonerId;
        $this->teamId = $teamId;
        $this->position = $position;
        $this->role = $role;
    }
    public function getSummonerId(): string
    {
        return $this->summonerId;
    }
    public function getTeamId(): string
    {
        return $this->teamId;
    }
    public function getPosition(): string
    {
        return $this->position;
    }
    public function getRole(): string
    {
        return $this->role;
    }
}