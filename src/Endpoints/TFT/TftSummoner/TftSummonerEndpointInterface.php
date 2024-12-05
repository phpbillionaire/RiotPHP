<?php
namespace RiotGamesPHP\Endpoints\TFT\TftSummoner;

interface TftSummonerEndpointInterface
{
    public function getSummonerByPuuid(string $puuid): array;
}