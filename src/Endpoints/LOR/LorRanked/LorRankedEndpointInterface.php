<?php
namespace RiotGamesPHP\Endpoints\LOR\LorRanked;

interface LorRankedEndpointInterface
{
    public function getPlayersInMasterTier(): array;
}