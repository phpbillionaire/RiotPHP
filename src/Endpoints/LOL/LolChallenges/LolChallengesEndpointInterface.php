<?php
namespace App\Endpoints\LOL\LolChallenges;

use App\Endpoints\LOL\LolChallenges\Collections\LolChallengesCollection;
use App\Endpoints\LOL\LolChallenges\DTO\ChallengeConfigInfoDto;
use App\Endpoints\LOL\LolChallenges\DTO\PlayerInfoDto;

interface LolChallengesEndpointInterface
{
    public function getChallengesConfig(): LolChallengesCollection;
    public function getChallengesPercentiles(): array;
    public function getChallengesConfigById(int $challengeId): ChallengeConfigInfoDto;
    public function getChallengesTopPlayersByLevel(int $challengeId, string $level): LolChallengesCollection;
    public function getChallengesPercentilesById(int $challengeId): array;
    public function getPlayersChallenges(string $puuid): PlayerInfoDto;
}