<?php
namespace RiotGamesPHP\Endpoints\LOL\Summoner;
interface SummonerEndpointInterface
{
    public function getData(string $puuid): array;
}