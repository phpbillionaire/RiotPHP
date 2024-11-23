<?php
namespace App\Endpoints\LOL\ChampionMastery;
use App\Api\{ApiHandlerInterface};

final class ChampionMasteryEndpoint implements ChampionMasteryEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getMasteriesByPuuid(string $puuid): array
    {
        $response = $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}");

        $masteries = [];

        foreach($response as $data){

            $rewardConfig = new RewardConfigDto(
                $data["nextSeasonMilestone"]["rewardConfig"]["rewardValue"] ?? null,
                $data["nextSeasonMilestone"]["rewardConfig"]["rewardType"] ?? null,
                $data["nextSeasonMilestone"]["rewardConfig"]["maximumReward"] ?? null,
            );

            $nextSeasonMilestone = new NextSeasonMilestonesDto(
                $data["nextSeasonMilestone"]["requireGradeCounts"],
                $data["nextSeasonMilestone"]["rewardMarks"],
                $data["nextSeasonMilestone"]["bonus"],
                $rewardConfig,
            );

            $masteries[] = new ChampionMasteryDto(
                puuid: $data["puuid"],
                championPointsUntilNextLevel: $data["championPointsUntilNextLevel"],
                chestGranted: $data["chestGranted"] ?? null,
                championId: $data["championId"],
                lastPlayTime: $data["lastPlayTime"],
                championLevel: $data["championLevel"],
                championPoints: $data["championPoints"],
                championPointsSinceLastLevel: $data["championPointsSinceLastLevel"],
                markRequiredForNextLevel: $data["markRequiredForNextLevel"],
                championSeasonMilestone: $data["championSeasonMilestone"],
                nextSeasonMilestone: $nextSeasonMilestone,
                tokensEarned: $data["tokensEarned"],
                milestoneGrades: $data["milestoneGrades"] ?? null
            );
        };

        return $masteries;
    }
    public function getMasteryByChampion(string $puuid, string $championId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}/by-champion/{$championId}");
    }
    public function getTopMasteries(string $puuid): array
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}/top");
    }
    public function getMasteryScores(string $puuid): int
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/scores/by-puuid/{$puuid}");
    }
}
