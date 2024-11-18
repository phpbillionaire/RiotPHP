<?php

namespace src\Interfaces;
interface AccountEndpointInterface
{
    public function getPuuid(string $name, string $tag): string;
}