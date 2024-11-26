<?php
namespace App\Endpoints\LOL\Match\DTO;
use App\Endpoints\LOL\Match\Collections\MatchCollection;

final readonly class PerksDto
{
    private PerkStatsDto $statPerks;
    private MatchCollection $styles;
}