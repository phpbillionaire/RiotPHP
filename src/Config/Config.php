<?php

namespace App\Config;

use App\Interfaces\ConfigInterface;
use Dotenv\Dotenv;

final class Config implements ConfigInterface
{
    private string $apiKey;
    private string $region;
    public function __construct(string $region)
    {
        Dotenv::createImmutable(__DIR__ . "/../../")->load();
        $this->apiKey = $_ENV["API_KEY"];
        $this->region = $region;
    }
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    public function getRegion(): string
    {
        return $this->region;
    }
}
