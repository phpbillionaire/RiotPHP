<?php
namespace RiotGamesPHP\Endpoints\TFT\SpectatorTft;

interface SpectatorTftEndpointInterface
{
    public function getCurrentGameInformationByPuuid(string $encryptedPUUID): array;
    public function getListOfFeaturedGames(): array;
}