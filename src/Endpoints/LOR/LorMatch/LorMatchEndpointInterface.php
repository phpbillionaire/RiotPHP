<?php

namespace RiotGamesPHP\Endpoints\LOR\LorMatch;

interface LorMatchEndpointInterface
{
    public function getListOfMatchIdsByPuuid(string $puuid): array;
    public function getMatchById(string $matchId): array;
}