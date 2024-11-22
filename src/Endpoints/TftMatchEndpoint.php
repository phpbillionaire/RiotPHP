<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\TftMatchEndpointInterface;

class TftMatchEndpoint implements TftMatchEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getListOfMatchIdsByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/tft/match/v1/matches/by-puuid/{$puuid}/ids");
    }
    public function getMatchByMatchId(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/tft/match/v1/matches/{$matchId}");
    }
}