<?php
namespace App\Endpoints\LOL\LolChallenges\DTO;

final readonly class ApexPlayerInfoDto
{
    private string $puuid;
    private float $value;
    private int $position;
    public function __construct(string $puuid, float $value, int $position)
    {
        $this->puuid = $puuid;
        $this->value = $value;
        $this->position = $position;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

}