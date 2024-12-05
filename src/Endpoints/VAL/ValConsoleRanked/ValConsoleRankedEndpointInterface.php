<?php
namespace RiotGamesPHP\Endpoints\VAL\ValConsoleRanked;
interface ValConsoleRankedEndpointInterface
{
    public function getLeaderboardByActId(string $actId): array;
}