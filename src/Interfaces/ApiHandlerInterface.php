<?php

namespace src\Interfaces;
interface ApiHandlerInterface
{
    public function request(string $endpoint, array $params = []): array;
}