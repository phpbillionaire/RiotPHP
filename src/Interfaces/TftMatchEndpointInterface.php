<?php
namespace App\Interfaces;

interface TftMatchEndpointInterface
{
    public function getListOfMatchIdsByPuuid(string $puuid): array;
    public function getMatchByMatchId(string $matchId): array;
}