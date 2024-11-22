<?php
namespace App\Endpoints\LOL\Match;
interface MatchEndpointInterface
{
    public function getMatchById(string $matchId): array;
    public function getMatchesByPuuid(string $puuid): array;
    public function getMatchTimelineById(string $matchId): array;
}