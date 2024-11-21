<?php
namespace App\Interfaces;

interface LolChallengesEndpointInterface
{
    public function getChallengesConfig(): array;
    public function getChallengesPercentiles(): array;
    public function getChallengesConfigById(int $challengeId): array;
    public function getChallengesTopPlayersByLevel(int $challengeId, string $level): array;
    public function getChallengesPercentilesById(int $challengeId): array;
    public function getPlayersChallenges(string $puuid): array;
}