<?php
namespace App\Interfaces;
interface AccountEndpointInterface
{
    public function getPuuid(string $name, string $tag): string;
}