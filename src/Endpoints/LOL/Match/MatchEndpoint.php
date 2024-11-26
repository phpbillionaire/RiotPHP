<?php
namespace App\Endpoints\LOL\Match;
use App\Api\ApiHandlerInterface;
use App\Endpoints\LOL\Match\Collections\MatchCollection;
use App\Endpoints\LOL\Match\DTO\ChallengesDto;
use App\Endpoints\LOL\Match\DTO\InfoDto;
use App\Endpoints\LOL\Match\DTO\MatchDto;
use App\Endpoints\LOL\Match\DTO\ParticipantDto;

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