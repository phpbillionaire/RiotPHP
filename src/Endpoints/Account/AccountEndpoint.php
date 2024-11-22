<?php
namespace App\Endpoints\Account;
use App\Api\{ApiHandlerInterface};

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
    public function getData(string $name, string $tag): array
    {
        return $this->apiHandler->request(endpoint: "/riot/account/v1/accounts/by-riot-id/{$name}/{$tag}");
    }
}