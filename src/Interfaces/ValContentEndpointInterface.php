<?php
namespace App\Interfaces;

interface ValContentEndpointInterface
{
    public function getContentWithLocale(string $locale): array;
}