<?php
namespace App\Endpoints\TFT\TftSummoner;

interface TftSummonerEndpointInterface
{
    public function getSummonerByPuuid(string $puuid): array;
}