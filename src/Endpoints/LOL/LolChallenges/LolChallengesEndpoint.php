<?php
namespace App\Endpoints\LOL\LolChallenges;
use App\Api\ApiHandlerInterface;
use App\Endpoints\LOL\LolChallenges\Collections\LolChallengesCollection;
use App\Endpoints\LOL\LolChallenges\DTO\ApexPlayerInfoDto;
use App\Endpoints\LOL\LolChallenges\DTO\ChallengeConfigInfoDto;
use App\Endpoints\LOL\LolChallenges\DTO\PlayerInfoDto;

final class LolChallengesEndpoint implements LolChallengesEndpointInterface
{
    private ApiHandlerInterface $apiHandler;
    public function __construct(ApiHandlerInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    public function getChallengesConfig(): LolChallengesCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/config");

        $lolChallengesCollection = new LolChallengesCollection();

        foreach ($response as $data){
            $lolChallengesCollection->add(
                new ChallengeConfigInfoDto(
                    $response["id"],
                    $response["localizedNames"],
                    $response["state"],
                    $response["tracking"],
                    $response["startTimestamp"],
                    $response["endTimestamp"],
                    $response["leaderboard"],
                    $response["thresholds"],
                )
            );
        }
        return $lolChallengesCollection;
    }
    public function getChallengesPercentiles(): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/percentiles");
    }
    public function getChallengesConfigById(int $challengeId): ChallengeConfigInfoDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/{$challengeId}/config");

        return new ChallengeConfigInfoDto(
            $response["id"],
            $response["localizedNames"],
            $response["state"],
            $response["tracking"],
            $response["startTimestamp"],
            $response["endTimestamp"],
            $response["leaderboard"],
            $response["thresholds"],
        );
    }
    public function getChallengesTopPlayersByLevel(int $challengeId, string $level): LolChallengesCollection
    {
        $response = $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/{$challengeId}/leaderboards/by-level/{$level}");

        $lolChallengesCollection = new LolChallengesCollection();

        foreach ($response as $data){
            $lolChallengesCollection->add(
                new ApexPlayerInfoDto(
                    $response["puuid"],
                    $response["value"],
                    $response["position"]
                )
            );
        }
        return $lolChallengesCollection;
    }
    public function getChallengesPercentilesById(int $challengeId): array
    {
        return $this->apiHandler->request(endpoint: "/lol/challenges/v1/challenges/{$challengeId}/percentiles");

    }
    public function getPlayersChallenges(string $puuid): PlayerInfoDto
    {
        $response = $this->apiHandler->request(endpoint: "/lol/challenges/v1/player-data/{$puuid}");
        return new PlayerInfoDto(
            $response["challenges"],
            $response["preferences"],
            $response["totalPoints"],
            $response["categoryPoints"]
        );
    }
}