<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;
use RiotGamesPHP\Endpoints\LOL\Match\Collections\MatchCollection;

final readonly class PerksDto
{
    private PerkStatsDto $statPerks;
    private MatchCollection $styles;
}