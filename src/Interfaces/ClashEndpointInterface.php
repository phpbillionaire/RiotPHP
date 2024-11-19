<?php
namespace App\Interfaces;

interface ClashEndpointInterface
{
    public function getPlayersBySummonerId(string $summonerId): array;
    public function getTeamById(string $teamId): array;
    public function getAllActiveOrUpcomingTournaments(): array;
    public function getTournamentByTeamId(string $teamId): array;
    public function getTournamentById(int $tournamentId): array;
}