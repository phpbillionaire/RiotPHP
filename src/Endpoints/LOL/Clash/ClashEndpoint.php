<?php
namespace App\Endpoints\LOL\Clash;
use App\Api\{ApiHandlerInterface};
use App\Endpoints\LOL\Clash\Collections\ClashCollection;
use App\Endpoints\LOL\Clash\DTO\{PlayerDto, TournamentPhaseDto, TeamDto, TournamentDto};

final class ClashEndpoint implements ClashEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getPlayersBySummonerId(string $summonerId): ClashCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/clash/v1/players/by-summoner/{$summonerId}");

        $player = new ClashCollection();

        foreach ($response as $data){
            $player->add(new PlayerDto($data['summonerId'], $data['teamId'], $data['position'], $data["role"]));
        }

        return $player;
    }
    public function getTeamById(string $teamId): ClashCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/clash/v1/teams/{$teamId}");

        $team = new ClashCollection();
        foreach ($response as $data){

            $players = new PlayerDto(
                summonerId: $data['players']["summonerId"],
                teamId: null,
                position: $data['players']["position"],
                role: $data['players']["role"],
            );
            $team->add(
                new TeamDto(
                    id: $data['id'],
                    tournamentId: $data['tournamentId'],
                    name: $data['name'],
                    iconId: $data['iconId'],
                    tier: $data['tier'],
                    captain: $data['captain'],
                    abbreviation: $data['abbreviation'],
                    players: $players,
                )
            );
        }
        return $team;
    }
    public function getAllActiveOrUpcomingTournaments(): ClashCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/clash/v1/tournaments");

        $tournaments = new ClashCollection();

        foreach ($response as $data){
            $schedule = new TournamentPhaseDto(
                id: ["schedule"]["id"],
                registrationTime: $data["schedule"]["registrationTime"],
                startTime: $data["schedule"]["startTime"],
                cancelled: $data["schedule"]["cancelled"],
            );
            $tournaments->add(
                new TournamentDto(
                    id: $data['id'],
                    themeId: $data['themeId'],
                    nameKey: $data['nameKey'],
                    nameKeySecondary: $data['nameKeySecondary'],
                    schedule: $schedule,
                )
            );
        }
        return $tournaments;
    }
    public function getTournamentByTeamId(string $teamId): TournamentDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/clash/v1/tournaments/by-team/{$teamId}");

        $schedule = new TournamentPhaseDto(
            id: ["schedule"]["id"],
            registrationTime: $response["schedule"]["registrationTime"],
            startTime: $response["schedule"]["startTime"],
            cancelled: $response["schedule"]["cancelled"],
        );

        return new TournamentDto(
            id: $response["id"],
            themeId: $response["themeId"],
            nameKey: $response["nameKey"],
            nameKeySecondary: $response["nameKeySecondary"],
            schedule: $schedule,
        );
    }
    public function getTournamentById(int $tournamentId): TournamentDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/clash/v1/tournaments/{$tournamentId}");

        $schedule = new TournamentPhaseDto(
            id: ["schedule"]["id"],
            registrationTime: $response["schedule"]["registrationTime"],
            startTime: $response["schedule"]["startTime"],
            cancelled: $response["schedule"]["cancelled"],
        );

        return new TournamentDto(
            id: $response["id"],
            themeId: $response["themeId"],
            nameKey: $response["nameKey"],
            nameKeySecondary: $response["nameKeySecondary"],
            schedule: $schedule,
        );
    }
}