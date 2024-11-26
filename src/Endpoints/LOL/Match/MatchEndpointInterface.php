<?php
namespace App\Endpoints\LOL\Match;
use App\Endpoints\LOL\Match\DTO\MatchDto;

interface MatchEndpointInterface
{
    public function getMatchesByPuuid(string $puuid): array;
    public function getMatchById(string $matchId): MatchDto;
    public function getMatchTimelineById(string $matchId): TimelineDto;
}