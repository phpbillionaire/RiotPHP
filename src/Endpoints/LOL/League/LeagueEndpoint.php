<?php
namespace App\Endpoints\LOL\League;

use App\Api\ApiHandlerInterface;

final class LeagueEndpoint implements LeagueEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getChallengerLeagueByQueue(string $queue): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league/v4/challengerleagues/by-queue/{$queue}");
    }
    public function getLeagueEntriesByEncryptedSummonerId(string $encryptedSummonerId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league/v4/entries/by-summoner/{$encryptedSummonerId}");
    }
    public function getAllLeagueEntries(string $queue, string $tier, string $division): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league/v4/entries/{$queue}/{$tier}/{$division}");
    }
    public function getGrandmasterLeagueByQueue(string $queue): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league/v4/grandmasterleagues/by-queue/{$queue}");
    }
    public function getLeagueById(string $leagueId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league/v4/leagues/{$leagueId}");
    }
    public function getMasterLeagueByQueue(string $queue): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league/v4/masterleagues/by-queue/{$queue}");
    }
}