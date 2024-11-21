<?php

namespace App\Interfaces;

interface LorMatchEndpointInterface
{
    public function getListOfMatchIdsByPuuid(string $puuid): array;
    public function getMatchById(string $matchId): array;
}