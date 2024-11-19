<?php
namespace App\Endpoints;
use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\LeagueExpEndpointInterface;

final class LeagueExpEndpoint implements LeagueExpEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getAllLeaguesEntries(string $queue, string $tier, string $division): array
    {
        return $this->apiHandler->request(endpoint: "/lol/league-exp/v4/entries/{$queue}/{$tier}/{$division}");
    }
}