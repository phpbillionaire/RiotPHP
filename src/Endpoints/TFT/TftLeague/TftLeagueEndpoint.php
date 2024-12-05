<?php
namespace RiotGamesPHP\Endpoints\TFT\TftLeague;

use RiotGamesPHP\Api\ApiHandlerInterface;

final class TftLeagueEndpoint implements TftLeagueEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getChallengerLeague(): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/challenger");
    }
    public function getLeagueEntriesBySummonerId(string $summonerId): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/entries/by-summoner/{$summonerId}");
    }
    public function getAllLeagueEntries(string $tier, string $division): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/entries/{$tier}/{$division}");
    }
    public function getGrandmasterLeague(): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/grandmaster");
    }
    public function getLeagueById(string $leagueId): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/leagues/{$leagueId}");
    }
    public function getMasterLeague(): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/master");
    }
    public function getTopLadderByQueue(string $queue): array
    {
        return $this->apiHandler->request(endpoint: "/tft/league/v1/rated-ladders/{$queue}/top");
    }
}