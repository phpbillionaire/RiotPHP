<?php
namespace App\Endpoints;
use App\Interfaces\{ApiHandlerInterface, ChampionMasteryEndpointInterface};

final class ChampionMasteryEndpoint implements ChampionMasteryEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getMasteriesByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}");
    }
    public function getMasteryByChampion(string $puuid, string $championId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}/by-champion/{$championId}");
    }
    public function getTopMasteries(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}/top");
    }
    public function getMasteryScores(string $puuid): int
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/scores/by-puuid/{$puuid}");
    }
}
