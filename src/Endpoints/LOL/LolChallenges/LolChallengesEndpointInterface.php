<?php
namespace RiotGamesPHP\Endpoints\LOL\LolChallenges;

use RiotGamesPHP\Endpoints\LOL\LolChallenges\Collections\LolChallengesCollection;
use RiotGamesPHP\Endpoints\LOL\LolChallenges\DTO\{ChallengeConfigInfoDto, PlayerInfoDto};

interface LolChallengesEndpointInterface
{
    public function getChallengesConfig(): LolChallengesCollection;
    public function getChallengesPercentiles(): array;
    public function getChallengesConfigById(int $challengeId): ChallengeConfigInfoDto;
    public function getChallengesTopPlayersByLevel(int $challengeId, string $level): LolChallengesCollection;
    public function getChallengesPercentilesById(int $challengeId): array;
    public function getPlayersChallenges(string $puuid): PlayerInfoDto;
}