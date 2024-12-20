<?php
namespace RGSDK\Config;

use Dotenv\Dotenv;

final readonly class Config
{
    public string $apiKey;

    public string $region;

    public function __construct(string $region)
    {
        Dotenv::createImmutable(__DIR__ . "/../../")->load();

        if (!isset($_ENV["API_KEY"])) {
            throw new \RuntimeException("API key is not set in the environment variables.");
        }

        $this->apiKey = $_ENV["API_KEY"];
        $this->region = $region;
    }
}
