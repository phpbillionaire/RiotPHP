<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;
final readonly class ObjectiveDto
{
    private bool $first;
    private int $kills;
    public function __construct(bool $first, int $kills)
    {
        $this->first = $first;
        $this->kills = $kills;
    }
    public function isFirst(): bool
    {
        return $this->first;
    }
    public function getKills(): int
    {
        return $this->kills;
    }
}