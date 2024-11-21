<?php
namespace App\Interfaces;

interface SpectatorTftEndpointInterface
{
    public function getCurrentGameInformationByPuuid(string $encryptedPUUID): array;
    public function getListOfFeaturedGames(): array;
}