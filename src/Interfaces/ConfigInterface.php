<?php

namespace src\Interfaces;
interface ConfigInterface
{
    public function getApiKey(): string;
    public function getRegion(): string;
}