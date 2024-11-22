<?php
namespace App\Endpoints\LOL\LolRsoMatch;

interface LolRsoMatchEndpointInterface
{
    public function getMatchById(string $matchId): array;
    public function getMatchTimelineById(string $matchId): array;
}