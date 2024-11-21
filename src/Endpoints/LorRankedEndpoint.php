<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\LorRankedEndpointInterface;

final class LorRankedEndpoint implements LorRankedEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getPlayersInMasterTier(): array
    {
        return $this->apiHandler->request(endpoint: "/lor/ranked/v1/leaderboards");
    }
}