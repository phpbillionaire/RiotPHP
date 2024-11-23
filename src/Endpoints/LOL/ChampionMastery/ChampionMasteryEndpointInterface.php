<?php
namespace App\Endpoints\LOL\ChampionMastery;
use App\Endpoints\LOL\ChampionMastery\DTO\ChampionMasteryDto;

interface ChampionMasteryEndpointInterface
{
    public function getMasteriesByPuuid(string $puuid): array;
    public function getMasteryByChampion(string $puuid, string $championId): ChampionMasteryDto;
    public function getTopMasteries(string $puuid): array;
    public function getMasteryScores(string $puuid): int;
}