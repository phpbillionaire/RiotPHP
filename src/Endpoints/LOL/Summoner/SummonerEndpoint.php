<?php
namespace RiotGamesPHP\Endpoints\LOL\Summoner;
use RiotGamesPHP\Api\ApiHandlerInterface;

final class SummonerEndpoint implements SummonerEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getData(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/summoner/v4/summoners/by-puuid/{$puuid}");
    }
}