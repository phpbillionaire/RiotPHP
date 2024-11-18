<?php

namespace App\Interfaces;
interface SummonerEndpointInterface
{
    public function getData(string $puuid): array;
}