<?php
namespace App\Interfaces;
interface LorStatusEndpointInterface
{
    public function getPlatformStatus(): array;
}