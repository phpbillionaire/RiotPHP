<?php
namespace RiotGamesPHP\Endpoints\LOL\LolStatus;

use RiotGamesPHP\Api\ApiHandlerInterface;

final class LolStatusEndpoint implements LolStatusEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getPlatformStatus(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/status/v4/platform-data");
    }
}