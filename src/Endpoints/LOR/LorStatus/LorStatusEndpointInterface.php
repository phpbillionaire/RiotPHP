<?php
namespace RiotGamesPHP\Endpoints\LOR\LorStatus;
interface LorStatusEndpointInterface
{
    public function getPlatformStatus(): array;
}