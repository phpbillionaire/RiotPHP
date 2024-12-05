<?php
namespace RiotGamesPHP\Endpoints\LOL\ChampionMastery;
use RiotGamesPHP\Endpoints\LOL\ChampionMastery\Collections\ChampionMasteryCollection;
use RiotGamesPHP\Endpoints\LOL\ChampionMastery\DTO\ChampionMasteryDto;

interface ChampionMasteryEndpointInterface
{
    public function getMasteriesByPuuid(string $puuid): ChampionMasteryCollection;
    public function getMasteryByChampion(string $puuid, string $championId): ChampionMasteryDto;
    public function getTopMasteries(string $puuid): ChampionMasteryCollection;
    public function getMasteryScores(string $puuid): int;
}