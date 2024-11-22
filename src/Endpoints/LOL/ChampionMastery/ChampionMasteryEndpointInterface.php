<?php
namespace App\Endpoints\LOL\ChampionMastery;
interface ChampionMasteryEndpointInterface
{
    public function getMasteriesByPuuid(string $puuid): array;
    public function getMasteryByChampion(string $puuid, string $championId): array;
    public function getTopMasteries(string $puuid): array;
    public function getMasteryScores(string $puuid): int;
}