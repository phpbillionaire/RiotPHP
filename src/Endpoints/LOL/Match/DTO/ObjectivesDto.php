<?php
namespace App\Endpoints\LOL\Match\DTO;
final readonly class ObjectivesDto
{
    public function __construct(
        private ObjectiveDto $baron,
        private ObjectiveDto $champion,
        private ObjectiveDto $dragon,
        private ObjectiveDto $horde,
        private ObjectiveDto $inhibitor,
        private ObjectiveDto $riftHerald,
        private ObjectiveDto $tower
    ){}

    public function getBaron(): ObjectiveDto
    {
        return $this->baron;
    }

    public function getChampion(): ObjectiveDto
    {
        return $this->champion;
    }

    public function getDragon(): ObjectiveDto
    {
        return $this->dragon;
    }

    public function getHorde(): ObjectiveDto
    {
        return $this->horde;
    }

    public function getInhibitor(): ObjectiveDto
    {
        return $this->inhibitor;
    }

    public function getRiftHerald(): ObjectiveDto
    {
        return $this->riftHerald;
    }

    public function getTower(): ObjectiveDto
    {
        return $this->tower;
    }

}