<?php
namespace App\Endpoints\TFT\TftStatus;

use App\Api\ApiHandler;

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