<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;

use RiotGamesPHP\Endpoints\LOL\Match\Collections\MatchCollection;

final readonly class TeamDto
{
    private MatchCollection $bans;
    private ObjectivesDto $objectives;
    private int $teamId;
    private bool $win;
    public function __construct(MatchCollection $bans, ObjectivesDto $objectives, int $teamId, bool $win)
    {
        $this->bans = $bans;
        $this->objectives = $objectives;
        $this->teamId = $teamId;
        $this->win = $win;
    }

    public function getBans(): MatchCollection
    {
        return $this->bans;
    }

    public function getObjectives(): ObjectivesDto
    {
        return $this->objectives;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function isWin(): bool
    {
        return $this->win;
    }

}