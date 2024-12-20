<?php
namespace RGSDK\Api;

use RGSDK\Config\Config;
use GuzzleHttp\{Client, ClientInterface};

final class ApiHandler implements ApiHandlerInterface
{
    private Config $config;

    private ClientInterface $httpClient;

    public function __construct(Config $config, ClientInterface $httpClient)
    {
        $this->config = $config;
        $this->httpClient = new Client([
            "base_uri" => "https://{$this->config->region}.api.riotgames.com/",
            "timeout" => 5.0,
            "verify" => false,
        ]);
    }

    public function request(string $endpoint, array $params = []): array|int
    {
        try {
            $response = $this->httpClient->request('GET', $endpoint, [
                "query" => array_merge($params, ["api_key" => $this->config->apiKey]),
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            throw new \Exception("API Request failed: {$e->getMessage()}", 0, $e);
        }
    }
}
