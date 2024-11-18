<?php

namespace App\Endpoints;
use App\Interfaces\{AccountEndpointInterface, ApiHandlerInterface};

final class AccountEndpoint implements AccountEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getPuuid(string $name, string $tag): string
    {
        $response = $this->apiHandler->request(endpoint: "/riot/account/v1/accounts/by-riot-id/{$name}/{$tag}");
        return $response["puuid"];
    }
}