<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;

final readonly class ParticipantDto
{
    public function __construct(
        private int $allInPings,
        private int $assistMePings,
        private int $assists,
        private int $baronKills,
        private int $bountyLevel,
        private int $champExperience,
        private int $champLevel,
        private int $championId,
        private string $championName,
        private int $commandPings,
        private int $championTransform,
        private int $consumablesPurchased,
        private ChallengesDto $challenges,
        private int $damageDealtToBuildings,
        private int $damageDealtToObjectives,
        private int $damageDealtToTurrets,
        private int $damageSelfMitigated,
        private int $deaths,
        private int $detectorWardsPlaced,
        private int $doubleKills,
        private int $dragonKills,
        private bool $eligibleForProgression,
        private int $enemyMissingPings,
        private int $enemyVisionPings,
        private bool $firstBloodAssist,
        private bool $firstBloodKill,
        private bool $firstTowerAssist,
        private bool $firstTowerKill,
        private bool $gameEndedInEarlySurrender,
        private bool $gameEndedInSurrender,
        private int $holdPings,
        private int $getBackPings,
        private int $goldEarned,
        private int $goldSpent,
        private string $individualPosition,
        private int $inhibitorKills,
        private int $inhibitorTakedowns,
        private int $inhibitorsLost,
        private int $item0,
        private int $item1,
        private int $item2,
        private int $item3,
        private int $item4,
        private int $item5,
        private int $item6,
        private int $itemsPurchased,
        private int $killingSprees,
        private int $kills,
        private string $lane,
        private int $largestCriticalStrike,
        private int $largestKillingSpree,
        private int $largestMultiKill,
        private int $longestTimeSpentLiving,
        private int $magicDamageDealt,
        private int $magicDamageDealtToChampions,
        private int $magicDamageTaken,
        private MissionsDto $missions,
        private int $neutralMinionsKilled,
        private int $needVisionPings,
        private int $nexusKills,
        private int $nexusTakedowns,
        private int $nexusLost,
        private int $objectivesStolen,
        private int $objectivesStolenAssists,
        private int $onMyWayPings,
        private int $participantId,
        private int $playerScore0,
        private int $playerScore1,
        private int $playerScore2,
        private int $playerScore3,
        private int $playerScore4,
        private int $playerScore5,
        private int $playerScore6,
        private int $playerScore7,
        private int $playerScore8,
        private int $playerScore9,
        private int $playerScore10,
        private int $playerScore11,
        private int $pentaKills,
        private PerksDto $perks,
        private int $physicalDamageDealt,
        private int $physicalDamageDealtToChampions,
        private int $physicalDamageTaken,
        private int $placement,
        private int $playerAugment1,
        private int $playerAugment2,
        private int $playerAugment3,
        private int $playerAugment4,
        private int $playerSubteamId,
        private int $pushPings,
        private int $profileIcon,
        private string $puuid,
        private int $quadraKills,
        private string $riotIdGameName,
        private string $riotIdTagline,
        private string $role,
        private int $sightWardsBoughtInGame,
        private int $spell1Casts,
        private int $spell2Casts,
        private int $spell3Casts,
        private int $spell4Casts,
        private int $subteamPlacement,
        private int $summoner1Casts,
        private int $summoner1Id,
        private int $summoner2Casts,
        private int $summoner2Id,
        private string $summonerId,
        private int $summonerLevel,
        private string $summonerName,
        private bool $teamEarlySurrendered,
        private int $teamId,
        private string $teamPosition,
        private int $timeCCingOthers,
        private int $timePlayed,
        private int $totalAllyJungleMinionsKilled,
        private int $totalDamageDealt,
        private int $totalDamageDealtToChampions,
        private int $totalDamageShieldedOnTeammates,
        private int $totalDamageTaken,
        private int $totalEnemyJungleMinionsKilled,
        private int $totalHeal,
        private int $totalHealsOnTeammates,
        private int $totalMinionsKilled,
        private int $totalTimeCCDealt,
        private int $totalTimeSpentDead,
        private int $totalUnitsHealed,
        private int $tripleKills,
        private int $trueDamageDealt,
        private int $trueDamageDealtToChampions,
        private int $trueDamageTaken,
        private int $turretKills,
        private int $turretTakedowns,
        private int $turretsLost,
        private int $unrealKills,
        private int $visionScore,
        private int $visionClearedPings,
        private int $visionWardsBoughtInGame,
        private int $wardsKilled,
        private int $wardsPlaced,
        private bool $win
    ) {}

    public function getAllInPings(): int
    {
        return $this->allInPings;
    }

    public function getAssistMePings(): int
    {
        return $this->assistMePings;
    }

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function getBaronKills(): int
    {
        return $this->baronKills;
    }

    public function getBountyLevel(): int
    {
        return $this->bountyLevel;
    }

    public function getChampExperience(): int
    {
        return $this->champExperience;
    }

    public function getChampLevel(): int
    {
        return $this->champLevel;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function getChampionName(): string
    {
        return $this->championName;
    }

    public function getCommandPings(): int
    {
        return $this->commandPings;
    }

    public function getChampionTransform(): int
    {
        return $this->championTransform;
    }

    public function getConsumablesPurchased(): int
    {
        return $this->consumablesPurchased;
    }

    public function getChallenges(): ChallengesDto
    {
        return $this->challenges;
    }

    public function getDamageDealtToBuildings(): int
    {
        return $this->damageDealtToBuildings;
    }

    public function getDamageDealtToObjectives(): int
    {
        return $this->damageDealtToObjectives;
    }

    public function getDamageDealtToTurrets(): int
    {
        return $this->damageDealtToTurrets;
    }

    public function getDamageSelfMitigated(): int
    {
        return $this->damageSelfMitigated;
    }

    public function getDeaths(): int
    {
        return $this->deaths;
    }

    public function getDetectorWardsPlaced(): int
    {
        return $this->detectorWardsPlaced;
    }

    public function getDoubleKills(): int
    {
        return $this->doubleKills;
    }

    public function getDragonKills(): int
    {
        return $this->dragonKills;
    }

    public function isEligibleForProgression(): bool
    {
        return $this->eligibleForProgression;
    }

    public function getEnemyMissingPings(): int
    {
        return $this->enemyMissingPings;
    }

    public function getEnemyVisionPings(): int
    {
        return $this->enemyVisionPings;
    }

    public function isFirstBloodAssist(): bool
    {
        return $this->firstBloodAssist;
    }

    public function isFirstBloodKill(): bool
    {
        return $this->firstBloodKill;
    }

    public function isFirstTowerAssist(): bool
    {
        return $this->firstTowerAssist;
    }

    public function isFirstTowerKill(): bool
    {
        return $this->firstTowerKill;
    }

    public function isGameEndedInEarlySurrender(): bool
    {
        return $this->gameEndedInEarlySurrender;
    }

    public function isGameEndedInSurrender(): bool
    {
        return $this->gameEndedInSurrender;
    }

    public function getHoldPings(): int
    {
        return $this->holdPings;
    }

    public function getGetBackPings(): int
    {
        return $this->getBackPings;
    }

    public function getGoldEarned(): int
    {
        return $this->goldEarned;
    }

    public function getGoldSpent(): int
    {
        return $this->goldSpent;
    }

    public function getIndividualPosition(): string
    {
        return $this->individualPosition;
    }

    public function getInhibitorKills(): int
    {
        return $this->inhibitorKills;
    }

    public function getInhibitorTakedowns(): int
    {
        return $this->inhibitorTakedowns;
    }

    public function getInhibitorsLost(): int
    {
        return $this->inhibitorsLost;
    }

    public function getItem0(): int
    {
        return $this->item0;
    }

    public function getItem1(): int
    {
        return $this->item1;
    }

    public function getItem2(): int
    {
        return $this->item2;
    }

    public function getItem3(): int
    {
        return $this->item3;
    }

    public function getItem4(): int
    {
        return $this->item4;
    }

    public function getItem5(): int
    {
        return $this->item5;
    }

    public function getItem6(): int
    {
        return $this->item6;
    }

    public function getItemsPurchased(): int
    {
        return $this->itemsPurchased;
    }

    public function getKillingSprees(): int
    {
        return $this->killingSprees;
    }

    public function getKills(): int
    {
        return $this->kills;
    }

    public function getLane(): string
    {
        return $this->lane;
    }

    public function getLargestCriticalStrike(): int
    {
        return $this->largestCriticalStrike;
    }

    public function getLargestKillingSpree(): int
    {
        return $this->largestKillingSpree;
    }

    public function getLargestMultiKill(): int
    {
        return $this->largestMultiKill;
    }

    public function getLongestTimeSpentLiving(): int
    {
        return $this->longestTimeSpentLiving;
    }

    public function getMagicDamageDealt(): int
    {
        return $this->magicDamageDealt;
    }

    public function getMagicDamageDealtToChampions(): int
    {
        return $this->magicDamageDealtToChampions;
    }

    public function getMagicDamageTaken(): int
    {
        return $this->magicDamageTaken;
    }

    public function getMissions(): MissionsDto
    {
        return $this->missions;
    }

    public function getNeutralMinionsKilled(): int
    {
        return $this->neutralMinionsKilled;
    }

    public function getNeedVisionPings(): int
    {
        return $this->needVisionPings;
    }

    public function getNexusKills(): int
    {
        return $this->nexusKills;
    }

    public function getNexusTakedowns(): int
    {
        return $this->nexusTakedowns;
    }

    public function getNexusLost(): int
    {
        return $this->nexusLost;
    }

    public function getObjectivesStolen(): int
    {
        return $this->objectivesStolen;
    }

    public function getObjectivesStolenAssists(): int
    {
        return $this->objectivesStolenAssists;
    }

    public function getOnMyWayPings(): int
    {
        return $this->onMyWayPings;
    }

    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    public function getPlayerScore0(): int
    {
        return $this->playerScore0;
    }

    public function getPlayerScore1(): int
    {
        return $this->playerScore1;
    }

    public function getPlayerScore2(): int
    {
        return $this->playerScore2;
    }

    public function getPlayerScore3(): int
    {
        return $this->playerScore3;
    }

    public function getPlayerScore4(): int
    {
        return $this->playerScore4;
    }

    public function getPlayerScore5(): int
    {
        return $this->playerScore5;
    }

    public function getPlayerScore6(): int
    {
        return $this->playerScore6;
    }

    public function getPlayerScore7(): int
    {
        return $this->playerScore7;
    }

    public function getPlayerScore8(): int
    {
        return $this->playerScore8;
    }

    public function getPlayerScore9(): int
    {
        return $this->playerScore9;
    }

    public function getPlayerScore10(): int
    {
        return $this->playerScore10;
    }

    public function getPlayerScore11(): int
    {
        return $this->playerScore11;
    }

    public function getPentaKills(): int
    {
        return $this->pentaKills;
    }

    public function getPerks(): PerksDto
    {
        return $this->perks;
    }

    public function getPhysicalDamageDealt(): int
    {
        return $this->physicalDamageDealt;
    }

    public function getPhysicalDamageDealtToChampions(): int
    {
        return $this->physicalDamageDealtToChampions;
    }

    public function getPhysicalDamageTaken(): int
    {
        return $this->physicalDamageTaken;
    }

    public function getPlacement(): int
    {
        return $this->placement;
    }

    public function getPlayerAugment1(): int
    {
        return $this->playerAugment1;
    }

    public function getPlayerAugment2(): int
    {
        return $this->playerAugment2;
    }

    public function getPlayerAugment3(): int
    {
        return $this->playerAugment3;
    }

    public function getPlayerAugment4(): int
    {
        return $this->playerAugment4;
    }

    public function getPlayerSubteamId(): int
    {
        return $this->playerSubteamId;
    }

    public function getPushPings(): int
    {
        return $this->pushPings;
    }

    public function getProfileIcon(): int
    {
        return $this->profileIcon;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getQuadraKills(): int
    {
        return $this->quadraKills;
    }

    public function getRiotIdGameName(): string
    {
        return $this->riotIdGameName;
    }

    public function getRiotIdTagline(): string
    {
        return $this->riotIdTagline;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getSightWardsBoughtInGame(): int
    {
        return $this->sightWardsBoughtInGame;
    }

    public function getSpell1Casts(): int
    {
        return $this->spell1Casts;
    }

    public function getSpell2Casts(): int
    {
        return $this->spell2Casts;
    }

    public function getSpell3Casts(): int
    {
        return $this->spell3Casts;
    }

    public function getSpell4Casts(): int
    {
        return $this->spell4Casts;
    }

    public function getSubteamPlacement(): int
    {
        return $this->subteamPlacement;
    }

    public function getSummoner1Casts(): int
    {
        return $this->summoner1Casts;
    }

    public function getSummoner1Id(): int
    {
        return $this->summoner1Id;
    }

    public function getSummoner2Casts(): int
    {
        return $this->summoner2Casts;
    }

    public function getSummoner2Id(): int
    {
        return $this->summoner2Id;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function isTeamEarlySurrendered(): bool
    {
        return $this->teamEarlySurrendered;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function getTeamPosition(): string
    {
        return $this->teamPosition;
    }

    public function getTimeCCingOthers(): int
    {
        return $this->timeCCingOthers;
    }

    public function getTimePlayed(): int
    {
        return $this->timePlayed;
    }

    public function getTotalAllyJungleMinionsKilled(): int
    {
        return $this->totalAllyJungleMinionsKilled;
    }

    public function getTotalDamageDealt(): int
    {
        return $this->totalDamageDealt;
    }

    public function getTotalDamageDealtToChampions(): int
    {
        return $this->totalDamageDealtToChampions;
    }

    public function getTotalDamageShieldedOnTeammates(): int
    {
        return $this->totalDamageShieldedOnTeammates;
    }

    public function getTotalDamageTaken(): int
    {
        return $this->totalDamageTaken;
    }

    public function getTotalEnemyJungleMinionsKilled(): int
    {
        return $this->totalEnemyJungleMinionsKilled;
    }

    public function getTotalHeal(): int
    {
        return $this->totalHeal;
    }

    public function getTotalHealsOnTeammates(): int
    {
        return $this->totalHealsOnTeammates;
    }

    public function getTotalMinionsKilled(): int
    {
        return $this->totalMinionsKilled;
    }

    public function getTotalTimeCCDealt(): int
    {
        return $this->totalTimeCCDealt;
    }

    public function getTotalTimeSpentDead(): int
    {
        return $this->totalTimeSpentDead;
    }

    public function getTotalUnitsHealed(): int
    {
        return $this->totalUnitsHealed;
    }

    public function getTripleKills(): int
    {
        return $this->tripleKills;
    }

    public function getTrueDamageDealt(): int
    {
        return $this->trueDamageDealt;
    }

    public function getTrueDamageDealtToChampions(): int
    {
        return $this->trueDamageDealtToChampions;
    }

    public function getTrueDamageTaken(): int
    {
        return $this->trueDamageTaken;
    }

    public function getTurretKills(): int
    {
        return $this->turretKills;
    }

    public function getTurretTakedowns(): int
    {
        return $this->turretTakedowns;
    }

    public function getTurretsLost(): int
    {
        return $this->turretsLost;
    }

    public function getUnrealKills(): int
    {
        return $this->unrealKills;
    }

    public function getVisionScore(): int
    {
        return $this->visionScore;
    }

    public function getVisionClearedPings(): int
    {
        return $this->visionClearedPings;
    }

    public function getVisionWardsBoughtInGame(): int
    {
        return $this->visionWardsBoughtInGame;
    }

    public function getWardsKilled(): int
    {
        return $this->wardsKilled;
    }

    public function getWardsPlaced(): int
    {
        return $this->wardsPlaced;
    }

    public function isWin(): bool
    {
        return $this->win;
    }
}