<?php
namespace App\Endpoints\TFT\TftStatus;

interface TftStatusEndpointInterface
{
    public function getTftStatus(): array;
}