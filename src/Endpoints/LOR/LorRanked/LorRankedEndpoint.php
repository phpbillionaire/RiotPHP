<?php
namespace RiotGamesPHP\Endpoints\LOR\LorRanked;

use RiotGamesPHP\Api\ApiHandlerInterface;

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