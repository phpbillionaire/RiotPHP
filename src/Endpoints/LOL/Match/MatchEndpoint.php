<?php
namespace App\Endpoints\LOL\Match;
use App\Api\ApiHandlerInterface;

final class MatchEndpoint implements MatchEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getMatchById(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/match/v5/matches/{$matchId}");
    }
    public function getMatchesByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/match/v5/matches/by-puuid/{$puuid}/ids");
    }
    public function getMatchTimelineById(string $matchId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/match/v5/matches/{$matchId}/timeline");
    }
}