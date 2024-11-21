<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\SpectatorTftEndpointInterface;

final class SpectatorTftEndpoint implements SpectatorTftEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getCurrentGameInformationByPuuid(string $encryptedPUUID): array
    {
        return $this->apiHandler->request(endpoint: "/lol/spectator/tft/v5/active-games/by-puuid/{$encryptedPUUID}");
    }
    public function getListOfFeaturedGames(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/spectator/tft/v5/featured-games");
    }
}