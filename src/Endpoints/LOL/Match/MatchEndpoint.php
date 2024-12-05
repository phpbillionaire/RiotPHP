<?php
namespace RiotGamesPHP\Endpoints\LOL\Match;
use RiotGamesPHP\Api\ApiHandlerInterface;
use RiotGamesPHP\Endpoints\LOL\Match\Collections\MatchCollection;
use RiotGamesPHP\Endpoints\LOL\Match\DTO\{ChallengesDto, InfoDto, MatchDto, ParticipantDto};

final class MatchEndpoint implements MatchEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getMatchesByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/match/v5/matches/by-puuid/{$puuid}/ids");
    }
    public function getMatchById(string $matchId): MatchDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/match/v5/matches/{$matchId}");
    }
    public function getMatchTimelineById(string $matchId): TimelineDto
    {
        return $this->apiHandler->request(endpoint: "/lol/match/v5/matches/{$matchId}/timeline");
    }
}