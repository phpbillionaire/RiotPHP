<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\LolStatusEndpointInterface;

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