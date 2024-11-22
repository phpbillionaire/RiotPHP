<?php
namespace App\Endpoints\LOR\LorRanked;

interface LorRankedEndpointInterface
{
    public function getPlayersInMasterTier(): array;
}