<?php
namespace RiotGamesPHP\Endpoints\LOL\Match;
use RiotGamesPHP\Endpoints\LOL\Match\DTO\MatchDto;

interface MatchEndpointInterface
{
    public function getMatchesByPuuid(string $puuid): array;
    public function getMatchById(string $matchId): MatchDto;
    public function getMatchTimelineById(string $matchId): TimelineDto;
}