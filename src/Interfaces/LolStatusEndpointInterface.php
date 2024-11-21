<?php
namespace App\Interfaces;
interface LolStatusEndpointInterface
{
    public function getPlatformStatus(): array;
}