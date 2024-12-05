<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;
use RiotGamesPHP\Endpoints\LOL\Match\Collections\MatchCollection;

final readonly class InfoDto
{
    public function __construct(
        private string $endOfGameResult,
        private int $gameCreation,
        private int $gameDuration,
        private int $gameEndTimestamp,
        private int $gameId,
        private string $gameMode,
        private string $gameName,
        private int $gameStartTimestamp,
        private string $gameType,
        private string $gameVersion,
        private int $mapId,
        private MatchCollection $participants,
        private string $platformId,
        private int $queueId,
        private MatchCollection $teams,
        private string $tournamentCode
    ){}

}