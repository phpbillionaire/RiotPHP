<?php
namespace App\Endpoints\LOL\LolStatus;

use App\Api\ApiHandlerInterface;

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