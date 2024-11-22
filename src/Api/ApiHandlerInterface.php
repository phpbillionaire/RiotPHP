<?php
namespace App\Api;

/**
 * Interface for handling API requests.
 */
interface ApiHandlerInterface
{
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
    public function request(string $endpoint, array $params = []): array|int;
}
