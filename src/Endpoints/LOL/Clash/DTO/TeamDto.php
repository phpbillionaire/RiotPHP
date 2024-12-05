<?php
namespace RiotGamesPHP\Endpoints\LOL\Clash\DTO;
final readonly class TeamDto
{
    public function __construct(
        private string $id,
        private int $tournamentId,
        private string $name,
        private int $iconId,
        private int $tier,
        private string $captain,
        private string $abbreviation,
        private PlayerDto $players
    ){}
    public function getId(): string
    {
        return $this->id;
    }
    public function getTournamentId(): int
    {
        return $this->tournamentId;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getIconId(): int
    {
        return $this->iconId;
    }
    public function getTier(): int
    {
        return $this->tier;
    }
    public function getCaptain(): string
    {
        return $this->captain;
    }
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }
    public function getPlayers(): PlayerDto
    {
        return $this->players;
    }
}