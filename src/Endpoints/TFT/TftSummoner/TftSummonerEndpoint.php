<?php
namespace RiotGamesPHP\Endpoints\TFT\TftSummoner;

use RiotGamesPHP\Api\ApiHandlerInterface;

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