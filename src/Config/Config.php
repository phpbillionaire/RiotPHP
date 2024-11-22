<?php
namespace App\Config;

use Dotenv\Dotenv;

/**
 * Configuration class for the API, handling API keys and region settings.
 */
final class Config implements ConfigInterface
{
    /**
     * @var string The API key for authentication.
     */
    private string $apiKey;

    /**
     * @var string The region for the API.
     */
    private string $region;

    /**
     * Config constructor.
     *
     * @param string $region The region to be used for API requests (e.g., "euw1", "na1").
     *
     * @throws \RuntimeException If the API key is not set in the environment.
     */
    public function __construct(string $region)
    {
        Dotenv::createImmutable(__DIR__ . "/../../")->load();

        if (!isset($_ENV["API_KEY"]) || empty($_ENV["API_KEY"])) {
            throw new \RuntimeException("API key is not set in the environment variables.");
        }

        $this->apiKey = $_ENV["API_KEY"];
        $this->region = $region;
    }

    /**
     * Returns the API key.
     *
     * @return string The API key.
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * Returns the region for the API.
     *
     * @return string The region.
     */
    public function getRegion(): string
    {
        return $this->region;
    }
}
