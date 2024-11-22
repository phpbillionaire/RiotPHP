<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\ValContentEndpointInterface;

final class ValContentEndpoint implements ValContentEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getContentWithLocale(string $locale): array
    {
        return $this->apiHandler->request(endpoint: "/val/content/v1/contents", params: ["locale" => $locale]);
    }
}