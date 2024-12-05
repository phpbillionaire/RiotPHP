<?php
namespace RiotGamesPHP\Endpoints\LOL\LeagueExp;
use RiotGamesPHP\Api\ApiHandlerInterface;
use RiotGamesPHP\Endpoints\LOL\LeagueExp\Collections\LeagueEntryCollection;
use RiotGamesPHP\Endpoints\LOL\LeagueExp\DTO\{LeagueEntryDto, MiniSiriesDto};

final class LeagueExpEndpoint implements LeagueExpEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getAllLeaguesEntries(string $queue, string $tier, string $division): LeagueEntryCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/league-exp/v4/entries/{$queue}/{$tier}/{$division}");

        $entries = new LeagueEntryCollection();

        foreach ($response as $entry) {
            $miniSiries = new MiniSiriesDto(
                losses: $entry["miniSeries"]["losses"],
                progress: $entry["miniSeries"]["progress"],
                target: $entry["miniSeries"]["target"],
                wins: $entry["miniSeries"]["wins"],
            );

            $entries->add(new LeagueEntryDto(
                leagueId: $entry["leagueId"],
                summonerId: $entry["summonerId"],
                queueType: $entry["queueType"],
                tier: $entry["tier"],
                rank: $entry["rank"],
                leaguePoints: $entry["leaguePoints"],
                wins: $entry["wins"],
                losses: $entry["losses"],
                hotStreak: $entry["hotStreak"],
                veteran: $entry["veteran"],
                freshBlood: $entry["freshBlood"],
                inactive: $entry["inactive"],
                miniSeries: $miniSiries
            ));
        }
        return $entries;
    }
}