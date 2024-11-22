<?php

namespace App\Endpoints\LOL\Clash;

use App\Api\{ApiHandlerInterface};

final class ClashEndpoint implements ClashEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getPlayersBySummonerId(string $summonerId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/clash/v1/players/by-summoner/{$summonerId}");
    }
    public function getTeamById(string $teamId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/clash/v1/teams/{$teamId}");
    }
    public function getAllActiveOrUpcomingTournaments(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/clash/v1/tournaments");
    }
    public function getTournamentByTeamId(string $teamId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/clash/v1/tournaments/by-team/{$teamId}");
    }
    public function getTournamentById(int $tournamentId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/clash/v1/tournaments/{$tournamentId}");
    }
}