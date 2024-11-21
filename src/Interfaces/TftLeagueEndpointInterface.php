<?php
namespace App\Interfaces;
interface TftLeagueEndpointInterface
{
    public function getChallengerLeague(): array;
    public function getLeagueEntriesBySummonerId(string $summonerId): array;
    public function getAllLeagueEntries(string $tier, string $division): array;
    public function getGrandmasterLeague(): array;
    public function getLeagueById(string $leagueId): array;
    public function getMasterLeague(): array;
    public function getTopLadderByQueue(string $queue): array;
}