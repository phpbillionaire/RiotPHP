<?php
namespace App\Interfaces;

interface SpectatorEndpointInterface
{
    public function getCurrentGameInformationByPuuid(string $encryptedPUUID): array;
    public function getListOfFeaturedGames(): array;
}