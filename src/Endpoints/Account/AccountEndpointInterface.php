<?php
namespace App\Endpoints\Account;
use App\Endpoints\Account\DTO\AccountDto;

interface AccountEndpointInterface
{
    public function getData(string $name, string $tag): AccountDto;
}