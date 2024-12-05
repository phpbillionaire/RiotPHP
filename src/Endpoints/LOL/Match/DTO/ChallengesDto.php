<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;
final readonly class ChallengesDto
{
    public function __construct(
        private int $AssistStreakCount,
        private int $baronBuffGoldAdvantageOverThreshold,
        private float $controlWardTimeCoverageInRiverOrEnemyHalf,
        private int $earliestBaron,
        private int $earliestDragonTakedown,
        private int $earliestElderDragon,
        private int $earlyLaningPhaseGoldExpAdvantage,
        private int $fasterSupportQuestCompletion,
        private int $fastestLegendary,
        private int $hadAfkTeammate,
        private int $highestChampionDamage,
        private int $highestCrowdControlScore,
        private int $highestWardKills,
        private int $junglerKillsEarlyJungle,
        private int $killsOnLanersEarlyJungleAsJungler,
        private int $laningPhaseGoldExpAdvantage,
        private int $legendaryCount,
        private float $maxCsAdvantageOnLaneOpponent,
        private int $maxLevelLeadLaneOpponent,
        private int $mostWardsDestroyedOneSweeper,
        private int $mythicItemUsed,
        private int $playedChampSelectPosition,
        private int $soloTurretsLategame,
        private int $takedownsFirst25Minutes,
        private int $teleportTakedowns,
        private int $thirdInhibitorDestroyedTime,
        private int $threeWardsOneSweeperCount,
        private float $visionScoreAdvantageLaneOpponent,
        private int $InfernalScalePickup,
        private int $fistBumpParticipation,
        private int $voidMonsterKill,
        private int $abilityUses,
        private int $acesBefore15Minutes,
        private float $alliedJungleMonsterKills,
        private int $baronTakedowns,
        private int $blastConeOppositeOpponentCount,
        private int $bountyGold,
        private int $buffsStolen,
        private int $completeSupportQuestInTime,
        private int $controlWardsPlaced,
        private float $damagePerMinute,
        private float $damageTakenOnTeamPercentage,
        private int $dancedWithRiftHerald,
        private int $deathsByEnemyChamps,
        private int $dodgeSkillShotsSmallWindow,
        private int $doubleAces,
        private int $dragonTakedowns,
        private array $legendaryItemUsed,
        private float $effectiveHealAndShielding,
        private int $elderDragonKillsWithOpposingSoul,
        private int $elderDragonMultikills,
        private int $enemyChampionImmobilizations,
        private float $enemyJungleMonsterKills,
        private int $epicMonsterKillsNearEnemyJungler,
        private int $epicMonsterKillsWithin30SecondsOfSpawn,
        private int $epicMonsterSteals,
        private int $epicMonsterStolenWithoutSmite,
        private int $firstTurretKilled,
        private float $firstTurretKilledTime,
        private int $flawlessAces,
        private int $fullTeamTakedown,
        private float $gameLength,
        private int $getTakedownsInAllLanesEarlyJungleAsLaner,
        private float $goldPerMinute,
        private int $hadOpenNexus,
        private int $immobilizeAndKillWithAlly,
        private int $initialBuffCount,
        private int $initialCrabCount,
        private float $jungleCsBefore10Minutes,
        private int $junglerTakedownsNearDamagedEpicMonster,
        private float $kda,
        private int $killAfterHiddenWithAlly,
        private int $killedChampTookFullTeamDamageSurvived,
        private int $killingSprees,
        private float $killParticipation,
        private int $killsNearEnemyTurret,
        private int $killsOnOtherLanesEarlyJungleAsLaner,
        private int $killsOnRecentlyHealedByAramPack,
        private int $killsUnderOwnTurret,
        private int $killsWithHelpFromEpicMonster,
        private int $knockEnemyIntoTeamAndKill,
        private int $kTurretsDestroyedBeforePlatesFall,
        private int $landSkillShotsEarlyGame,
        private int $laneMinionsFirst10Minutes,
        private int $lostAnInhibitor,
        private int $maxKillDeficit,
        private int $mejaisFullStackInTime,
        private float $moreEnemyJungleThanOpponent,
        private int $multiKillOneSpell,
        private int $multikills,
        private int $multikillsAfterAggressiveFlash,
        private int $multiTurretRiftHeraldCount,
        private int $outerTurretExecutesBefore10Minutes,
        private int $outnumberedKills,
        private int $outnumberedNexusKill,
        private int $perfectDragonSoulsTaken,
        private int $perfectGame,
        private int $pickKillWithAlly,
        private int $poroExplosions,
        private int $quickCleanse,
        private int $quickFirstTurret,
        private int $quickSoloKills,
        private int $riftHeraldTakedowns,
        private int $saveAllyFromDeath,
        private int $scuttleCrabKills,
        private float $shortestTimeToAceFromFirstTakedown,
        private int $skillshotsDodged,
        private int $skillshotsHit,
        private int $snowballsHit,
        private int $soloBaronKills,
        private int $SWARM_DefeatAatrox,
        private int $SWARM_DefeatBriar,
        private int $SWARM_DefeatMiniBosses,
        private int $SWARM_EvolveWeapon,
        private int $SWARM_Have3Passives,
        private int $SWARM_KillEnemy,
        private float $SWARM_PickupGold,
        private int $SWARM_ReachLevel50,
        private int $SWARM_Survive15Min,
        private int $SWARM_WinWith5EvolvedWeapons,
        private int $soloKills,
        private int $stealthWardsPlaced,
        private int $survivedSingleDigitHpCount,
        private int $survivedThreeImmobilizesInFight,
        private int $takedownOnFirstTurret,
        private int $takedowns,
        private int $takedownsAfterGainingLevelAdvantage,
        private int $takedownsBeforeJungleMinionSpawn,
        private int $takedownsFirstXMinutes,
        private int $takedownsInAlcove,
        private int $takedownsInEnemyFountain,
        private int $teamBaronKills,
        private float $teamDamagePercentage,
        private int $teamElderDragonKills,
        private int $teamRiftHeraldKills,
        private int $tookLargeDamageSurvived,
        private int $turretPlatesTaken,
        private int $turretsTakenWithRiftHerald,
        private int $turretTakedowns,
        private int $twentyMinionsIn3SecondsCount,
        private int $twoWardsOneSweeperCount,
        private int $unseenRecalls,
        private float $visionScorePerMinute,
        private int $wardsGuarded,
        private int $wardTakedowns,
        private int $wardTakedownsBefore20M
    ) {}

    public function getAssistStreakCount(): int
    {
        return $this->AssistStreakCount;
    }

    public function getBaronBuffGoldAdvantageOverThreshold(): int
    {
        return $this->baronBuffGoldAdvantageOverThreshold;
    }

    public function getControlWardTimeCoverageInRiverOrEnemyHalf(): float
    {
        return $this->controlWardTimeCoverageInRiverOrEnemyHalf;
    }

    public function getEarliestBaron(): int
    {
        return $this->earliestBaron;
    }

    public function getEarliestDragonTakedown(): int
    {
        return $this->earliestDragonTakedown;
    }

    public function getEarliestElderDragon(): int
    {
        return $this->earliestElderDragon;
    }

    public function getEarlyLaningPhaseGoldExpAdvantage(): int
    {
        return $this->earlyLaningPhaseGoldExpAdvantage;
    }

    public function getFasterSupportQuestCompletion(): int
    {
        return $this->fasterSupportQuestCompletion;
    }

    public function getFastestLegendary(): int
    {
        return $this->fastestLegendary;
    }

    public function getHadAfkTeammate(): int
    {
        return $this->hadAfkTeammate;
    }

    public function getHighestChampionDamage(): int
    {
        return $this->highestChampionDamage;
    }

    public function getHighestCrowdControlScore(): int
    {
        return $this->highestCrowdControlScore;
    }

    public function getHighestWardKills(): int
    {
        return $this->highestWardKills;
    }

    public function getJunglerKillsEarlyJungle(): int
    {
        return $this->junglerKillsEarlyJungle;
    }

    public function getKillsOnLanersEarlyJungleAsJungler(): int
    {
        return $this->killsOnLanersEarlyJungleAsJungler;
    }

    public function getLaningPhaseGoldExpAdvantage(): int
    {
        return $this->laningPhaseGoldExpAdvantage;
    }

    public function getLegendaryCount(): int
    {
        return $this->legendaryCount;
    }

    public function getMaxCsAdvantageOnLaneOpponent(): float
    {
        return $this->maxCsAdvantageOnLaneOpponent;
    }

    public function getMaxLevelLeadLaneOpponent(): int
    {
        return $this->maxLevelLeadLaneOpponent;
    }

    public function getMostWardsDestroyedOneSweeper(): int
    {
        return $this->mostWardsDestroyedOneSweeper;
    }

    public function getMythicItemUsed(): int
    {
        return $this->mythicItemUsed;
    }

    public function getPlayedChampSelectPosition(): int
    {
        return $this->playedChampSelectPosition;
    }

    public function getSoloTurretsLategame(): int
    {
        return $this->soloTurretsLategame;
    }

    public function getTakedownsFirst25Minutes(): int
    {
        return $this->takedownsFirst25Minutes;
    }

    public function getTeleportTakedowns(): int
    {
        return $this->teleportTakedowns;
    }

    public function getThirdInhibitorDestroyedTime(): int
    {
        return $this->thirdInhibitorDestroyedTime;
    }

    public function getThreeWardsOneSweeperCount(): int
    {
        return $this->threeWardsOneSweeperCount;
    }

    public function getVisionScoreAdvantageLaneOpponent(): float
    {
        return $this->visionScoreAdvantageLaneOpponent;
    }

    public function getInfernalScalePickup(): int
    {
        return $this->InfernalScalePickup;
    }

    public function getFistBumpParticipation(): int
    {
        return $this->fistBumpParticipation;
    }

    public function getVoidMonsterKill(): int
    {
        return $this->voidMonsterKill;
    }

    public function getAbilityUses(): int
    {
        return $this->abilityUses;
    }

    public function getAcesBefore15Minutes(): int
    {
        return $this->acesBefore15Minutes;
    }

    public function getAlliedJungleMonsterKills(): float
    {
        return $this->alliedJungleMonsterKills;
    }

    public function getBaronTakedowns(): int
    {
        return $this->baronTakedowns;
    }

    public function getBlastConeOppositeOpponentCount(): int
    {
        return $this->blastConeOppositeOpponentCount;
    }

    public function getBountyGold(): int
    {
        return $this->bountyGold;
    }

    public function getBuffsStolen(): int
    {
        return $this->buffsStolen;
    }

    public function getCompleteSupportQuestInTime(): int
    {
        return $this->completeSupportQuestInTime;
    }

    public function getControlWardsPlaced(): int
    {
        return $this->controlWardsPlaced;
    }

    public function getDamagePerMinute(): float
    {
        return $this->damagePerMinute;
    }

    public function getDamageTakenOnTeamPercentage(): float
    {
        return $this->damageTakenOnTeamPercentage;
    }

    public function getDancedWithRiftHerald(): int
    {
        return $this->dancedWithRiftHerald;
    }

    public function getDeathsByEnemyChamps(): int
    {
        return $this->deathsByEnemyChamps;
    }

    public function getDodgeSkillShotsSmallWindow(): int
    {
        return $this->dodgeSkillShotsSmallWindow;
    }

    public function getDoubleAces(): int
    {
        return $this->doubleAces;
    }

    public function getDragonTakedowns(): int
    {
        return $this->dragonTakedowns;
    }

    public function getLegendaryItemUsed(): array
    {
        return $this->legendaryItemUsed;
    }

    public function getEffectiveHealAndShielding(): float
    {
        return $this->effectiveHealAndShielding;
    }

    public function getElderDragonKillsWithOpposingSoul(): int
    {
        return $this->elderDragonKillsWithOpposingSoul;
    }

    public function getElderDragonMultikills(): int
    {
        return $this->elderDragonMultikills;
    }

    public function getEnemyChampionImmobilizations(): int
    {
        return $this->enemyChampionImmobilizations;
    }

    public function getEnemyJungleMonsterKills(): float
    {
        return $this->enemyJungleMonsterKills;
    }

    public function getEpicMonsterKillsNearEnemyJungler(): int
    {
        return $this->epicMonsterKillsNearEnemyJungler;
    }

    public function getEpicMonsterKillsWithin30SecondsOfSpawn(): int
    {
        return $this->epicMonsterKillsWithin30SecondsOfSpawn;
    }

    public function getEpicMonsterSteals(): int
    {
        return $this->epicMonsterSteals;
    }

    public function getEpicMonsterStolenWithoutSmite(): int
    {
        return $this->epicMonsterStolenWithoutSmite;
    }

    public function getFirstTurretKilled(): int
    {
        return $this->firstTurretKilled;
    }

    public function getFirstTurretKilledTime(): float
    {
        return $this->firstTurretKilledTime;
    }

    public function getFlawlessAces(): int
    {
        return $this->flawlessAces;
    }

    public function getFullTeamTakedown(): int
    {
        return $this->fullTeamTakedown;
    }

    public function getGameLength(): float
    {
        return $this->gameLength;
    }

    public function getGetTakedownsInAllLanesEarlyJungleAsLaner(): int
    {
        return $this->getTakedownsInAllLanesEarlyJungleAsLaner;
    }

    public function getGoldPerMinute(): float
    {
        return $this->goldPerMinute;
    }

    public function getHadOpenNexus(): int
    {
        return $this->hadOpenNexus;
    }

    public function getImmobilizeAndKillWithAlly(): int
    {
        return $this->immobilizeAndKillWithAlly;
    }

    public function getInitialBuffCount(): int
    {
        return $this->initialBuffCount;
    }

    public function getInitialCrabCount(): int
    {
        return $this->initialCrabCount;
    }

    public function getJungleCsBefore10Minutes(): float
    {
        return $this->jungleCsBefore10Minutes;
    }

    public function getJunglerTakedownsNearDamagedEpicMonster(): int
    {
        return $this->junglerTakedownsNearDamagedEpicMonster;
    }

    public function getKda(): float
    {
        return $this->kda;
    }

    public function getKillAfterHiddenWithAlly(): int
    {
        return $this->killAfterHiddenWithAlly;
    }

    public function getKilledChampTookFullTeamDamageSurvived(): int
    {
        return $this->killedChampTookFullTeamDamageSurvived;
    }

    public function getKillingSprees(): int
    {
        return $this->killingSprees;
    }

    public function getKillParticipation(): float
    {
        return $this->killParticipation;
    }

    public function getKillsNearEnemyTurret(): int
    {
        return $this->killsNearEnemyTurret;
    }

    public function getKillsOnOtherLanesEarlyJungleAsLaner(): int
    {
        return $this->killsOnOtherLanesEarlyJungleAsLaner;
    }

    public function getKillsOnRecentlyHealedByAramPack(): int
    {
        return $this->killsOnRecentlyHealedByAramPack;
    }

    public function getKillsUnderOwnTurret(): int
    {
        return $this->killsUnderOwnTurret;
    }

    public function getKillsWithHelpFromEpicMonster(): int
    {
        return $this->killsWithHelpFromEpicMonster;
    }

    public function getKnockEnemyIntoTeamAndKill(): int
    {
        return $this->knockEnemyIntoTeamAndKill;
    }

    public function getKTurretsDestroyedBeforePlatesFall(): int
    {
        return $this->kTurretsDestroyedBeforePlatesFall;
    }

    public function getLandSkillShotsEarlyGame(): int
    {
        return $this->landSkillShotsEarlyGame;
    }

    public function getLaneMinionsFirst10Minutes(): int
    {
        return $this->laneMinionsFirst10Minutes;
    }

    public function getLostAnInhibitor(): int
    {
        return $this->lostAnInhibitor;
    }

    public function getMaxKillDeficit(): int
    {
        return $this->maxKillDeficit;
    }

    public function getMejaisFullStackInTime(): int
    {
        return $this->mejaisFullStackInTime;
    }

    public function getMoreEnemyJungleThanOpponent(): float
    {
        return $this->moreEnemyJungleThanOpponent;
    }

    public function getMultiKillOneSpell(): int
    {
        return $this->multiKillOneSpell;
    }

    public function getMultikills(): int
    {
        return $this->multikills;
    }

    public function getMultikillsAfterAggressiveFlash(): int
    {
        return $this->multikillsAfterAggressiveFlash;
    }

    public function getMultiTurretRiftHeraldCount(): int
    {
        return $this->multiTurretRiftHeraldCount;
    }

    public function getOuterTurretExecutesBefore10Minutes(): int
    {
        return $this->outerTurretExecutesBefore10Minutes;
    }

    public function getOutnumberedKills(): int
    {
        return $this->outnumberedKills;
    }

    public function getOutnumberedNexusKill(): int
    {
        return $this->outnumberedNexusKill;
    }

    public function getPerfectDragonSoulsTaken(): int
    {
        return $this->perfectDragonSoulsTaken;
    }

    public function getPerfectGame(): int
    {
        return $this->perfectGame;
    }

    public function getPickKillWithAlly(): int
    {
        return $this->pickKillWithAlly;
    }

    public function getPoroExplosions(): int
    {
        return $this->poroExplosions;
    }

    public function getQuickCleanse(): int
    {
        return $this->quickCleanse;
    }

    public function getQuickFirstTurret(): int
    {
        return $this->quickFirstTurret;
    }

    public function getQuickSoloKills(): int
    {
        return $this->quickSoloKills;
    }

    public function getRiftHeraldTakedowns(): int
    {
        return $this->riftHeraldTakedowns;
    }

    public function getSaveAllyFromDeath(): int
    {
        return $this->saveAllyFromDeath;
    }

    public function getScuttleCrabKills(): int
    {
        return $this->scuttleCrabKills;
    }

    public function getShortestTimeToAceFromFirstTakedown(): float
    {
        return $this->shortestTimeToAceFromFirstTakedown;
    }

    public function getSkillshotsDodged(): int
    {
        return $this->skillshotsDodged;
    }

    public function getSkillshotsHit(): int
    {
        return $this->skillshotsHit;
    }

    public function getSnowballsHit(): int
    {
        return $this->snowballsHit;
    }

    public function getSoloBaronKills(): int
    {
        return $this->soloBaronKills;
    }

    public function getSWARMDefeatAatrox(): int
    {
        return $this->SWARM_DefeatAatrox;
    }

    public function getSWARMDefeatBriar(): int
    {
        return $this->SWARM_DefeatBriar;
    }

    public function getSWARMDefeatMiniBosses(): int
    {
        return $this->SWARM_DefeatMiniBosses;
    }

    public function getSWARMEvolveWeapon(): int
    {
        return $this->SWARM_EvolveWeapon;
    }

    public function getSWARMHave3Passives(): int
    {
        return $this->SWARM_Have3Passives;
    }

    public function getSWARMKillEnemy(): int
    {
        return $this->SWARM_KillEnemy;
    }

    public function getSWARMPickupGold(): float
    {
        return $this->SWARM_PickupGold;
    }

    public function getSWARMReachLevel50(): int
    {
        return $this->SWARM_ReachLevel50;
    }

    public function getSWARMSurvive15Min(): int
    {
        return $this->SWARM_Survive15Min;
    }

    public function getSWARMWinWith5EvolvedWeapons(): int
    {
        return $this->SWARM_WinWith5EvolvedWeapons;
    }

    public function getSoloKills(): int
    {
        return $this->soloKills;
    }

    public function getStealthWardsPlaced(): int
    {
        return $this->stealthWardsPlaced;
    }

    public function getSurvivedSingleDigitHpCount(): int
    {
        return $this->survivedSingleDigitHpCount;
    }

    public function getSurvivedThreeImmobilizesInFight(): int
    {
        return $this->survivedThreeImmobilizesInFight;
    }

    public function getTakedownOnFirstTurret(): int
    {
        return $this->takedownOnFirstTurret;
    }

    public function getTakedowns(): int
    {
        return $this->takedowns;
    }

    public function getTakedownsAfterGainingLevelAdvantage(): int
    {
        return $this->takedownsAfterGainingLevelAdvantage;
    }

    public function getTakedownsBeforeJungleMinionSpawn(): int
    {
        return $this->takedownsBeforeJungleMinionSpawn;
    }

    public function getTakedownsFirstXMinutes(): int
    {
        return $this->takedownsFirstXMinutes;
    }

    public function getTakedownsInAlcove(): int
    {
        return $this->takedownsInAlcove;
    }

    public function getTakedownsInEnemyFountain(): int
    {
        return $this->takedownsInEnemyFountain;
    }

    public function getTeamBaronKills(): int
    {
        return $this->teamBaronKills;
    }

    public function getTeamDamagePercentage(): float
    {
        return $this->teamDamagePercentage;
    }

    public function getTeamElderDragonKills(): int
    {
        return $this->teamElderDragonKills;
    }

    public function getTeamRiftHeraldKills(): int
    {
        return $this->teamRiftHeraldKills;
    }

    public function getTookLargeDamageSurvived(): int
    {
        return $this->tookLargeDamageSurvived;
    }

    public function getTurretPlatesTaken(): int
    {
        return $this->turretPlatesTaken;
    }

    public function getTurretsTakenWithRiftHerald(): int
    {
        return $this->turretsTakenWithRiftHerald;
    }

    public function getTurretTakedowns(): int
    {
        return $this->turretTakedowns;
    }

    public function getTwentyMinionsIn3SecondsCount(): int
    {
        return $this->twentyMinionsIn3SecondsCount;
    }

    public function getTwoWardsOneSweeperCount(): int
    {
        return $this->twoWardsOneSweeperCount;
    }

    public function getUnseenRecalls(): int
    {
        return $this->unseenRecalls;
    }

    public function getVisionScorePerMinute(): float
    {
        return $this->visionScorePerMinute;
    }

    public function getWardsGuarded(): int
    {
        return $this->wardsGuarded;
    }

    public function getWardTakedowns(): int
    {
        return $this->wardTakedowns;
    }

    public function getWardTakedownsBefore20M(): int
    {
        return $this->wardTakedownsBefore20M;
    }

}