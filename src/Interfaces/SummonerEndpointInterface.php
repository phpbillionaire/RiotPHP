<?php

namespace src\Interfaces;
interface SummonerEndpointInterface
{
    public function getData(string $puuid): array;
}