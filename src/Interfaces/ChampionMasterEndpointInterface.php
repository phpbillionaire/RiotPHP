<?php
namespace App\Interfaces;
interface ChampionMasterEndpointInterface
{
    public function getMasteriesByPuuid(string $puuid): array;
    public function getMasteryByChampion(string $puuid, string $championId): array;
    public function getTopMasteries(string $puuid): array;
    public function getMasteryScores(string $puuid): int;
}