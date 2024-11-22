<?php
namespace App\Api;
interface ApiHandlerInterface
{
    public function request(string $endpoint, array $params = []): array|int;
}