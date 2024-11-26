<?php
namespace App\Endpoints\LOL\Match\DTO;

final readonly class MetadataDto
{
    private string $dataVersion;
    private string $matchId;
    private array $participants;
    public function __construct(string $dataVersion, string $matchId, array $participants)
    {
        $this->dataVersion = $dataVersion;
        $this->matchId = $matchId;
        $this->participants = $participants;
    }
    public function getDataVersion(): string
    {
        return $this->dataVersion;
    }
    public function getMatchId(): string
    {
        return $this->matchId;
    }
    public function getParticipants(): array
    {
        return $this->participants;
    }
}