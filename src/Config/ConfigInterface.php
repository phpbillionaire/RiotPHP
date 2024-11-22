<?php
namespace App\Config;
interface ConfigInterface
{
    public function getApiKey(): string;
    public function getRegion(): string;
}