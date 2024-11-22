<?php
namespace App\Endpoints\LOL\Spectator;

interface SpectatorEndpointInterface
{
    public function getCurrentGameInformationByPuuid(string $encryptedPUUID): array;
    public function getListOfFeaturedGames(): array;
}