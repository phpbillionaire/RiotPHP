<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\LorStatusEndpointInterface;

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