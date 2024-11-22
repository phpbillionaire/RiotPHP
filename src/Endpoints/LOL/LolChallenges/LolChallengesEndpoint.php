<?php
namespace App\Endpoints\LOL\LolChallenges;
use App\Api\ApiHandlerInterface;

final class LolChallengesEndpoint implements LolChallengesEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getChallengesConfig(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/config");
    }
    public function getChallengesPercentiles(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/percentiles");

    }
    public function getChallengesConfigById(int $challengeId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/{$challengeId}/config");

    }
    public function getChallengesTopPlayersByLevel(int $challengeId, string $level): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/{$challengeId}/leaderboards/by-level/{$level}");

    }
    public function getChallengesPercentilesById(int $challengeId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/{$challengeId}/percentiles");

    }
    public function getPlayersChallenges(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/player-data/{$puuid}");

    }
}