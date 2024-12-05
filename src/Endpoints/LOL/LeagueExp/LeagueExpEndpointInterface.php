<?php
namespace RiotGamesPHP\Endpoints\LOL\LeagueExp;
use RiotGamesPHP\Endpoints\LOL\LeagueExp\Collections\LeagueEntryCollection;

interface LeagueExpEndpointInterface
{
    public function getAllLeaguesEntries(string $queue, string $tier, string $division): LeagueEntryCollection;
}