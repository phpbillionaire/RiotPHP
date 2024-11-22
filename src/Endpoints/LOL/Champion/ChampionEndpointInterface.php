<?php

namespace App\Endpoints\LOL\Champion;

interface ChampionEndpointInterface
{
    public function getChampionRotations(): array;
}