<?php
namespace App\Endpoints\Account;
final readonly class AccountDto
{
    private string $puuid;
    private string $gameName;
    private string $tagLine;

    public function __construct(string $puuid, string $gameName, string $tagLine)
    {
        $this->puuid = $puuid;
        $this->gameName = $gameName;
        $this->tagLine = $tagLine;
    }
    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getGameName(): string
    {
        return $this->gameName;
    }

    public function getTagLine(): string
    {
        return $this->tagLine;
    }
}