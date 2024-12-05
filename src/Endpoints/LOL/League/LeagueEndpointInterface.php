<?php
namespace RiotGamesPHP\Endpoints\LOL\League;

use RiotGamesPHP\Endpoints\LOL\League\Collections\LeagueCollection;
use RiotGamesPHP\Endpoints\LOL\League\DTO\LeagueListDto;

interface LeagueEndpointInterface
{
    public function getChallengerLeagueByQueue(string $queue): LeagueListDto;
    public function getLeagueEntriesByEncryptedSummonerId(string $encryptedSummonerId): LeagueCollection;
    public function getAllLeagueEntries(string $queue, string $tier, string $division): LeagueCollection;
    public function getGrandmasterLeagueByQueue(string $queue): LeagueListDto;
    public function getLeagueById(string $leagueId): LeagueListDto;
    public function getMasterLeagueByQueue(string $queue): LeagueListDto;
}