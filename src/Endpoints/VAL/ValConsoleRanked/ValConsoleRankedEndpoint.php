<?php
namespace App\Endpoints\VAL\ValConsoleRanked;

use App\Api\ApiHandlerInterface;

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