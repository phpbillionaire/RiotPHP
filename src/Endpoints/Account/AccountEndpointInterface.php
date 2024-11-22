<?php
namespace App\Endpoints\Account;
interface AccountEndpointInterface
{
    public function getPuuid(string $name, string $tag): string;
    public function getData(string $name, string $tag): array;
}