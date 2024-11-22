<?php
namespace App\Endpoints\VAL\ValConsoleRanked;
interface ValConsoleRankedEndpointInterface
{
    public function getLeaderboardByActId(string $actId): array;
}