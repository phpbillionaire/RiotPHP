<?php
namespace App\Interfaces;

interface LorRankedEndpointInterface
{
    public function getPlayersInMasterTier(): array;
}