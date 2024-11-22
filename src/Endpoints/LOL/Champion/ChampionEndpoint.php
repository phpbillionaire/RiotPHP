<?php
namespace App\Endpoints\LOL\Champion;
use App\Api\{ApiHandlerInterface};

final class ChampionEndpoint implements ChampionEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getChampionRotations(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/platform/v3/champion-rotations");
    }
}