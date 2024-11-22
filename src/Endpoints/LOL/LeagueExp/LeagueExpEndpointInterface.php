<?php
namespace App\Endpoints\LOL\LeagueExp;
interface LeagueExpEndpointInterface
{
    public function getAllLeaguesEntries(string $queue, string $tier, string $division): array;
}