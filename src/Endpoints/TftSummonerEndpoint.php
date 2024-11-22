<?php
namespace App\Endpoints;

use App\Interfaces\ApiHandlerInterface;
use App\Interfaces\TftSummonerEndpointInterface;

class TftSummonerEndpoint implements TftSummonerEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getSummonerByPuuid(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/tft/summoner/v1/summoners/by-puuid/{$puuid}");
    }

}