<?php
namespace RiotGamesPHP\Endpoints\TFT\TftStatus;

interface TftStatusEndpointInterface
{
    public function getTftStatus(): array;
}