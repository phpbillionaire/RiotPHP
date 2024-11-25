<?php
namespace App\Endpoints\LOL\League\DTO;

final readonly class LeagueListDto
{
    private string $leagueId;
    private LeagueItemDto $entries;
    private string $tier;
    private string $name;
    private string $queue;
    public function __construct(string $leagueId, LeagueItemDTO $enties, string $tier, string $name, string $queue)
    {
        $this->leagueId = $leagueId;
        $this->entries = $enties;
        $this->tier = $tier;
        $this->name = $name;
        $this->queue = $queue;
    }

    public function getQueue(): string
    {
        return $this->queue;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function getEntries(): LeagueItemDto
    {
        return $this->entries;
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

}