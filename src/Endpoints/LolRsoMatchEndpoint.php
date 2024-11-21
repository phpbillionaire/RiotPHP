<?php
namespace App\Endpoints;
use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\LolRsoMatchEndpointInterface;

class LolRsoMatchEndpoint implements LolRsoMatchEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getMatchById(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/rso-match/v1/matches/{$matchId}");
    }
    public function getMatchTimelineById(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/rso-match/v1/matches/{$matchId}/timeline");
    }
}