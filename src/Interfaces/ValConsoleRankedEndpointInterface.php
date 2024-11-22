<?php
namespace App\Interfaces;
interface ValConsoleRankedEndpointInterface
{
    public function getLeaderboardByActId(string $actId): array;
}