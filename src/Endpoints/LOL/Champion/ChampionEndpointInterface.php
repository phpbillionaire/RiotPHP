<?php

namespace RiotGamesPHP\Endpoints\LOL\Champion;

interface ChampionEndpointInterface
{
    public function getChampionRotations(): array;
}