<?php

namespace App\Interfaces;
interface ConfigInterface
{
    public function getApiKey(): string;
    public function getRegion(): string;
}