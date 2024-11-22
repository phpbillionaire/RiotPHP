<?php
namespace App\Api;

use App\Config\ConfigInterface;
use GuzzleHttp\{Client, ClientInterface};

/**
 * Handles API requests to Riot Games' API.
 */
final class ApiHandler implements ApiHandlerInterface
{
    /**
     * @var ConfigInterface Configuration instance for API settings.
     */
    private ConfigInterface $config;

    /**
     * @var ClientInterface HTTP client for sending requests.
     */
    private ClientInterface $httpClient;

    /**
     * ApiHandler constructor.
     *
     * @param ConfigInterface $config     Configuration for the API (e.g., region, API key).
     * @param ClientInterface $httpClient HTTP client implementation.
     */
    public function __construct(ConfigInterface $config, ClientInterface $httpClient)
    {
        $this->config = $config;
        $this->httpClient = new Client([
            "base_uri" => "https://{$this->config->getRegion()}.api.riotgames.com/",
            "timeout" => 5.0,
            "verify" => false,
        ]);
    }

    /**
     * Sends a GET request to the specified API endpoint.
     *
     * @param string $endpoint The API endpoint (relative to the base URI).
     * @param array $params    Optional query parameters for the request.
     *
     * @return array|int The decoded JSON response as an associative array, or the HTTP status code.
     *
     * @throws \Exception If the request fails or an error occurs.
     */
    public function request(string $endpoint, array $params = []): array|int
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
