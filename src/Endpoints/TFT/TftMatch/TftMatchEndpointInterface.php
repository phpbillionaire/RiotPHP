<?php
namespace RiotGamesPHP\Endpoints\TFT\TftMatch;

interface TftMatchEndpointInterface
{
    public function getListOfMatchIdsByPuuid(string $puuid): array;
    public function getMatchByMatchId(string $matchId): array;
}