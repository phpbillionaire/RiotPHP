<?php
namespace App\Interfaces;
interface LeagueExpEndpointInterface
{
    public function getAllLeaguesEntries(string $queue, string $tier, string $division): array;
}