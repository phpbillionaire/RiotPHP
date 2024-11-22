<?php

namespace App\Endpoints\LOR\LorMatch;

use App\Api\ApiHandlerInterface;

final class LorMatchEndpoint implements LorMatchEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getListOfMatchIdsByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lor/match/v1/matches/by-puuid/{$puuid}/ids");
    }
    public function getMatchById(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/lor/match/v1/matches/{$matchId}");
    }
}