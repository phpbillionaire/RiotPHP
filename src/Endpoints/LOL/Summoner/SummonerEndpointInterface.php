<?php
namespace App\Endpoints\LOL\Summoner;
interface SummonerEndpointInterface
{
    public function getData(string $puuid): array;
}