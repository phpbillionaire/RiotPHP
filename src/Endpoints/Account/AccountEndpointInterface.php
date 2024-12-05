<?php
namespace RiotGamesPHP\Endpoints\Account;
use RiotGamesPHP\Endpoints\Account\DTO\AccountDto;

interface AccountEndpointInterface
{
    public function getData(string $name, string $tag): AccountDto;
}