<?php
namespace App\Api;
use GuzzleHttp\{Client, ClientInterface};
use App\Interfaces\{ApiHandlerInterface, ConfigInterface};
final class ApiHandler implements ApiHandlerInterface
{
    private ConfigInterface $config;
    private ClientInterface $httpClient;
    public function __construct(ConfigInterface $config, ClientInterface $httpClient)
    {
        $this->config = $config;
        $this->httpClient = new Client([
            "base_uri" => "https://{$this->config->getRegion()}.api.riotgames.com/",
            "timeout" => 5.0,
            "verify" => false,
        ]);
    }
    public function request(string $endpoint, array $params = []): array
    {
        try {
            $response = $this->httpClient->request('GET', $endpoint, [
                "query" => array_merge($params, ["api_key" => $this->config->getApiKey()]),
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            throw new \Exception("API Request failed: {$e->getMessage()}", 0, $e);
        }
    }
}
