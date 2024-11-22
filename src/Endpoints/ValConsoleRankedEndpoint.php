<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\ValConsoleRankedEndpointInterface;

class ValConsoleRankedEndpoint implements ValConsoleRankedEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getLeaderboardByActId(string $actId): array
    {
        return $this->apiHandler->request(endpoint: "/val/content/v1/contents");
    }

}