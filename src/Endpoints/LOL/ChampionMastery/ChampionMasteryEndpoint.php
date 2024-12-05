<?php
namespace RiotGamesPHP\Endpoints\LOL\ChampionMastery;
use RiotGamesPHP\Api\{ApiHandlerInterface};
use RiotGamesPHP\Endpoints\LOL\ChampionMastery\DTO\{ChampionMasteryDto, NextSeasonMilestonesDto, RewardConfigDto};
use RiotGamesPHP\Endpoints\LOL\ChampionMastery\Collections\ChampionMasteryCollection;
final class ChampionMasteryEndpoint implements ChampionMasteryEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }
    public function getMasteriesByPuuid(string $puuid): ChampionMasteryCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}");

        $masteries = new ChampionMasteryCollection();

        foreach($response as $data){
            $rewardConfig = new RewardConfigDto(
                rewardValue: $data["nextSeasonMilestone"]["rewardConfig"]["rewardValue"] ?? null,
                rewardType: $data["nextSeasonMilestone"]["rewardConfig"]["rewardType"] ?? null,
                maximumReward: $data["nextSeasonMilestone"]["rewardConfig"]["maximumReward"] ?? null,
            );

            $nextSeasonMilestone = new NextSeasonMilestonesDto(
                requireGradeCounts: $data["nextSeasonMilestone"]["requireGradeCounts"],
                rewardMarks: $data["nextSeasonMilestone"]["rewardMarks"],
                bonus: $data["nextSeasonMilestone"]["bonus"],
                RewardConfig: $rewardConfig,
            );

            $masteries->add(new ChampionMasteryDto(
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
            ));
        };
        return $masteries;
    }
    public function getMasteryByChampion(string $puuid, string $championId): ChampionMasteryDto
    {
        $response =  $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}/by-champion/{$championId}");

        $rewardConfig = new RewardConfigDto(
            rewardValue: $response["nextSeasonMilestone"]["rewardConfig"]["rewardValue"] ?? null,
            rewardType: $response["nextSeasonMilestone"]["rewardConfig"]["rewardType"] ?? null,
            maximumReward: $response["nextSeasonMilestone"]["rewardConfig"]["maximumReward"] ?? null,
        );

        $nextSeasonMilestone = new NextSeasonMilestonesDto(
            requireGradeCounts: $response["nextSeasonMilestone"]["requireGradeCounts"],
            rewardMarks: $response["nextSeasonMilestone"]["rewardMarks"],
            bonus: $response["nextSeasonMilestone"]["bonus"],
            RewardConfig: $rewardConfig,
        );

        return new ChampionMasteryDto(
            puuid: $response["puuid"],
            championPointsUntilNextLevel: $response["championPointsUntilNextLevel"],
            chestGranted: $response["chestGranted"] ?? null,
            championId: $response["championId"],
            lastPlayTime: $response["lastPlayTime"],
            championLevel: $response["championLevel"],
            championPoints: $response["championPoints"],
            championPointsSinceLastLevel: $response["championPointsSinceLastLevel"],
            markRequiredForNextLevel: $response["markRequiredForNextLevel"],
            championSeasonMilestone: $response["championSeasonMilestone"],
            nextSeasonMilestone: $nextSeasonMilestone,
            tokensEarned: $response["tokensEarned"],
            milestoneGrades: $response["milestoneGrades"] ?? null
        );
    }
    public function getTopMasteries(string $puuid): ChampionMasteryCollection
    {
        $response =  $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/champion-masteries/by-puuid/{$puuid}/top");

        $masteries = new ChampionMasteryCollection();

        foreach($response as $data){
            $rewardConfig = new RewardConfigDto(
                rewardValue: $data["nextSeasonMilestone"]["rewardConfig"]["rewardValue"] ?? null,
                rewardType: $data["nextSeasonMilestone"]["rewardConfig"]["rewardType"] ?? null,
                maximumReward: $data["nextSeasonMilestone"]["rewardConfig"]["maximumReward"] ?? null,
            );

            $nextSeasonMilestone = new NextSeasonMilestonesDto(
                requireGradeCounts: $data["nextSeasonMilestone"]["requireGradeCounts"],
                rewardMarks: $data["nextSeasonMilestone"]["rewardMarks"],
                bonus: $data["nextSeasonMilestone"]["bonus"],
                RewardConfig: $rewardConfig,
            );

            $masteries->add(new ChampionMasteryDto(
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
            ));
        };
        return $masteries;
    }
    public function getMasteryScores(string $puuid): int
    {
        return $this->apiHandler->request(endpoint: "/lol/champion-mastery/v4/scores/by-puuid/{$puuid}");
    }
}
