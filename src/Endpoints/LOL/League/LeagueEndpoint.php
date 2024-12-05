<?php
namespace RiotGamesPHP\Endpoints\LOL\League;
use RiotGamesPHP\Api\ApiHandlerInterface;
use RiotGamesPHP\Endpoints\LOL\League\DTO\{LeagueEntryDto, LeagueItemDTO, LeagueListDto};
use RiotGamesPHP\Endpoints\LOL\LeagueExp\DTO\MiniSiriesDto;
use RiotGamesPHP\Endpoints\LOL\League\Collections\LeagueCollection;
final class LeagueEndpoint implements LeagueEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getChallengerLeagueByQueue(string $queue): LeagueListDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league/v4/challengerleagues/by-queue/{$queue}");

        $miniSiries = new MiniSiriesDto(
            $response["entries"]["miniSiries"]["losses"],
            $response["entries"]["miniSiries"]["progress"],
            $response["entries"]["miniSiries"]["target"],
            $response["entries"]["miniSiries"]["wins"]
        );

        $entries = new LeagueItemDTO(
            $response["entries"]["freshBlood"],
            $response["entries"]["wins"],
            $miniSiries,
            $response["entries"]["inactive"],
            $response["entries"]["veteran"],
            $response["entries"]["hotStreak"],
            $response["entries"]["rank"],
            $response["entries"]["leaguePoints"],
            $response["entries"]["losses"],
            $response["entries"]["summonerId"],
        );

        return new LeagueListDto(
            $response["leagueId"],
            $entries,
            $response["tier"],
            $response["name"],
            $response["queue"],
        );
    }
    public function getLeagueEntriesByEncryptedSummonerId(string $encryptedSummonerId): LeagueCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league/v4/entries/by-summoner/{$encryptedSummonerId}");

        $leagueCollection = new LeagueCollection();

        foreach ($response as $data){
            $miniSiries = new MiniSiriesDto(
                $data["miniSiries"]["losses"],
                $data["miniSiries"]["progress"],
                $data["miniSiries"]["target"],
                $data["miniSiries"]["wins"],
            );

            $leagueCollection->add(new LeagueEntryDto(
                $data["leagueId"],
                $data["summonerId"],
                $data["queueType"],
                $data["tier"],
                $data["rank"],
                $data["leaguePoints"],
                $data["wins"],
                $data["losses"],
                $data["hotStreak"],
                $data["veteran"],
                $data["freshBlood"],
                $data["inactive"],
                $miniSiries,
            ));
        }
        return $leagueCollection;
    }
    public function getAllLeagueEntries(string $queue, string $tier, string $division): LeagueCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league/v4/entries/{$queue}/{$tier}/{$division}");

        $leagueCollection = new LeagueCollection();

        foreach ($response as $data){
            $miniSiries = new MiniSiriesDto(
                $data["miniSiries"]["losses"],
                $data["miniSiries"]["progress"],
                $data["miniSiries"]["target"],
                $data["miniSiries"]["wins"],
            );

            $leagueCollection->add(new LeagueEntryDto(
                $data["leagueId"],
                $data["summonerId"],
                $data["queueType"],
                $data["tier"],
                $data["rank"],
                $data["leaguePoints"],
                $data["wins"],
                $data["losses"],
                $data["hotStreak"],
                $data["veteran"],
                $data["freshBlood"],
                $data["inactive"],
                $miniSiries,
            ));
        }
        return $leagueCollection;
    }
    public function getGrandmasterLeagueByQueue(string $queue): LeagueListDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league/v4/grandmasterleagues/by-queue/{$queue}");

        $miniSiries = new MiniSiriesDto(
            $response["entries"]["miniSiries"]["losses"],
            $response["entries"]["miniSiries"]["progress"],
            $response["entries"]["miniSiries"]["target"],
            $response["entries"]["miniSiries"]["wins"]
        );

        $entries = new LeagueItemDTO(
            $response["entries"]["freshBlood"],
            $response["entries"]["wins"],
            $miniSiries,
            $response["entries"]["inactive"],
            $response["entries"]["veteran"],
            $response["entries"]["hotStreak"],
            $response["entries"]["rank"],
            $response["entries"]["leaguePoints"],
            $response["entries"]["losses"],
            $response["entries"]["summonerId"],
        );

        return new LeagueListDto(
            $response["leagueId"],
            $entries,
            $response["tier"],
            $response["name"],
            $response["queue"],
        );
    }
    public function getLeagueById(string $leagueId): LeagueListDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league/v4/leagues/{$leagueId}");
        $miniSiries = new MiniSiriesDto(
            $response["entries"]["miniSiries"]["losses"],
            $response["entries"]["miniSiries"]["progress"],
            $response["entries"]["miniSiries"]["target"],
            $response["entries"]["miniSiries"]["wins"]
        );

        $entries = new LeagueItemDTO(
            $response["entries"]["freshBlood"],
            $response["entries"]["wins"],
            $miniSiries,
            $response["entries"]["inactive"],
            $response["entries"]["veteran"],
            $response["entries"]["hotStreak"],
            $response["entries"]["rank"],
            $response["entries"]["leaguePoints"],
            $response["entries"]["losses"],
            $response["entries"]["summonerId"],
        );

        return new LeagueListDto(
            $response["leagueId"],
            $entries,
            $response["tier"],
            $response["name"],
            $response["queue"],
        );
    }
    public function getMasterLeagueByQueue(string $queue): LeagueListDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league/v4/masterleagues/by-queue/{$queue}");
        $miniSiries = new MiniSiriesDto(
            $response["entries"]["miniSiries"]["losses"],
            $response["entries"]["miniSiries"]["progress"],
            $response["entries"]["miniSiries"]["target"],
            $response["entries"]["miniSiries"]["wins"]
        );

        $entries = new LeagueItemDTO(
            $response["entries"]["freshBlood"],
            $response["entries"]["wins"],
            $miniSiries,
            $response["entries"]["inactive"],
            $response["entries"]["veteran"],
            $response["entries"]["hotStreak"],
            $response["entries"]["rank"],
            $response["entries"]["leaguePoints"],
            $response["entries"]["losses"],
            $response["entries"]["summonerId"],
        );

        return new LeagueListDto(
            $response["leagueId"],
            $entries,
            $response["tier"],
            $response["name"],
            $response["queue"],
        );
    }
}