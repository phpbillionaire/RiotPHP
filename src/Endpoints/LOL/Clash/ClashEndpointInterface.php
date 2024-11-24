<?php
namespace App\Endpoints\LOL\Clash;
use App\Endpoints\LOL\Clash\Collections\ClashCollection;
use App\Endpoints\LOL\Clash\DTO\TournamentDto;

interface ClashEndpointInterface
{
    public function getPlayersBySummonerId(string $summonerId): ClashCollection;
    public function getTeamById(string $teamId): ClashCollection;
    public function getAllActiveOrUpcomingTournaments(): ClashCollection;
    public function getTournamentByTeamId(string $teamId): TournamentDto;
    public function getTournamentById(int $tournamentId): TournamentDto;
}