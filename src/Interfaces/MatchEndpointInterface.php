<?php
namespace App\Interfaces;
interface MatchEndpointInterface
{
    public function getMatchById(string $matchId): array;
    public function getMatchesByPuuid(string $puuid): array;
}