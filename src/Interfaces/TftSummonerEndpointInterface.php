<?php
namespace App\Interfaces;

interface TftSummonerEndpointInterface
{
    public function getSummonerByPuuid(string $puuid): array;
}