<?php
namespace App\Endpoints\LOL\LeagueExp;
use App\Api\ApiHandlerInterface;

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