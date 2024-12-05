<?php
namespace RiotGamesPHP\Endpoints\VAL\ValConsoleMatch;

interface ValConsoleMatchEndpointInterface
{
    public function getMatchById(string $matchId): array;
    public function getMatchListForGamesByPuuid(string $puuid): array;
    public function getRecentMatchesByQueue(string $queue): array;
}