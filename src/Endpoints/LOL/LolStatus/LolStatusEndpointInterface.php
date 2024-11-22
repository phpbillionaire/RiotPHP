<?php
namespace App\Endpoints\LOL\LolStatus;
interface LolStatusEndpointInterface
{
    public function getPlatformStatus(): array;
}