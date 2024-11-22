<?php
namespace App\Endpoints\LOR\LorStatus;
interface LorStatusEndpointInterface
{
    public function getPlatformStatus(): array;
}