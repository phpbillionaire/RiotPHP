<?php
namespace App\Config;

/**
 * Interface for configuration settings.
 */
interface ConfigInterface
{
    /**
     * Retrieves the API key for authentication.
     *
     * @return string The API key.
     */
    public function getApiKey(): string;

    /**
     * Retrieves the region for the API.
     *
     * @return string The region (e.g., "euw1", "na1", "americas", "europe").
     */
    public function getRegion(): string;
}
