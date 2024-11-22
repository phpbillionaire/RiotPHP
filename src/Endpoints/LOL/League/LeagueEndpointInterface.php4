<?php
namespace App\Endpoints\LOL\League;

interface LeagueEndpointInterface
{
    public function getChallengerLeagueByQueue(string $queue): array;
    public function getLeagueEntriesByEncryptedSummonerId(string $encryptedSummonerId): array;
    public function getAllLeagueEntries(string $queue, string $tier, string $division): array;
    public function getGrandmasterLeagueByQueue(string $queue): array;
    public function getLeagueById(string $leagueId): array;
    public function getMasterLeagueByQueue(string $queue): array;
}