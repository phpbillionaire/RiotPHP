<?php
namespace RiotGamesPHP\Endpoints\VAL\ValContent;

interface ValContentEndpointInterface
{
    public function getContentWithLocale(string $locale): array;
}