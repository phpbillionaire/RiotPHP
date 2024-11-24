<?php
namespace App\Endpoints\LOL\LeagueExp;
use App\Endpoints\LOL\LeagueExp\Collections\LeagueEntryCollection;

interface LeagueExpEndpointInterface
{
    public function getAllLeaguesEntries(string $queue, string $tier, string $division): LeagueEntryCollection;
}