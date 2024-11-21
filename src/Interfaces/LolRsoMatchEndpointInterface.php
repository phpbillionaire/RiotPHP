<?php
namespace App\Interfaces;

interface LolRsoMatchEndpointInterface
{
    public function getMatchById(string $matchId): array;
    public function getMatchTimelineById(string $matchId): array;
}