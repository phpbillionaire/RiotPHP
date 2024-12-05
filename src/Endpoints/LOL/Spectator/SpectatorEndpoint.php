<?php
namespace RiotGamesPHP\Endpoints\LOL\Spectator;

use RiotGamesPHP\Api\ApiHandlerInterface;

final class SpectatorEndpoint implements SpectatorEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getCurrentGameInformationByPuuid(string $encryptedPUUID): array
    {
        return $this->apiHandler->request(endpoint: "/lol/spectator/v5/active-games/by-summoner/{$encryptedPUUID}");
    }
    public function getListOfFeaturedGames(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/spectator/v5/featured-games");
    }
}