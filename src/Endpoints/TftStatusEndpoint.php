<?php
namespace App\Endpoints;

use App\Api\ApiHandler;
use App\Interfaces\TftStatusEndpointInterface;

class TftStatusEndpoint implements TftStatusEndpointInterface
{
    private ApiHandler $apiHandler;

    public function __construct(ApiHandler $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getTftStatus(): array
    {
        return $this->apiHandler->request(endpoint: "/tft/status/v1/platform-data");
    }
}