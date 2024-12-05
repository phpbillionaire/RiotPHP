<?php
namespace RiotGamesPHP\Endpoints\LOL\LolStatus;
interface LolStatusEndpointInterface
{
    public function getPlatformStatus(): array;
}