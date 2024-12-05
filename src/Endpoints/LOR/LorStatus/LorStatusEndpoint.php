<?php
namespace RiotGamesPHP\Endpoints\LOR\LorStatus;

use RiotGamesPHP\Api\ApiHandlerInterface;

final class LorStatusEndpoint implements LorStatusEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getPlatformStatus(): array
    {
        return $this->apiHandler->request(endpoint: "/lor/status/v1/platform-data");
    }
}