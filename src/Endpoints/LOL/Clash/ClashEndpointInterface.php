<?php
namespace RiotGamesPHP\Endpoints\LOL\Clash;
use RiotGamesPHP\Endpoints\LOL\Clash\Collections\ClashCollection;
use RiotGamesPHP\Endpoints\LOL\Clash\DTO\TournamentDto;

interface ClashEndpointInterface
{
    public function getPlayersBySummonerId(string $summonerId): ClashCollection;
    public function getTeamById(string $teamId): ClashCollection;
    public function getAllActiveOrUpcomingTournaments(): ClashCollection;
    public function getTournamentByTeamId(string $teamId): TournamentDto;
    public function getTournamentById(int $tournamentId): TournamentDto;
}