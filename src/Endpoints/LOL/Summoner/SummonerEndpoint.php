<?php
namespace App\Endpoints\LOL\Summoner;
use App\Api\ApiHandlerInterface;

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