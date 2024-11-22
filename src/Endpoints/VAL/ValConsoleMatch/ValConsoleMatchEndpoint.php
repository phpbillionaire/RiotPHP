<?php
namespace App\Endpoints\VAL\ValConsoleMatch;

use App\Api\ApiHandlerInterface;

class ValConsoleMatchEndpoint implements ValConsoleMatchEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getMatchById(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/val/match/console/v1/matches/{$matchId}");
    }
    public function getMatchListForGamesByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/val/match/console/v1/matchlists/by-puuid/{$puuid}");
    }
    public function getRecentMatchesByQueue(string $queue): array
    {
        return $this->apiHandler->request(endpoint: "/val/match/console/v1/recent-matches/by-queue/{$queue}");
    }
}