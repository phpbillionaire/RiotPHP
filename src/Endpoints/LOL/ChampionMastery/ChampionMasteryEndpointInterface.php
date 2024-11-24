<?php
namespace App\Endpoints\LOL\ChampionMastery;
use App\Endpoints\LOL\ChampionMastery\Collections\ChampionMasteryCollection;
use App\Endpoints\LOL\ChampionMastery\DTO\ChampionMasteryDto;

interface ChampionMasteryEndpointInterface
{
    public function getMasteriesByPuuid(string $puuid): ChampionMasteryCollection;
    public function getMasteryByChampion(string $puuid, string $championId): ChampionMasteryDto;
    public function getTopMasteries(string $puuid): ChampionMasteryCollection;
    public function getMasteryScores(string $puuid): int;
}