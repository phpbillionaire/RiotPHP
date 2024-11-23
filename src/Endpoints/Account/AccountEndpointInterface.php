<?php
namespace App\Endpoints\Account;
use App\Endpoints\Account\AccountDto;
interface AccountEndpointInterface
{
    public function getData(string $name, string $tag): AccountDto;
}