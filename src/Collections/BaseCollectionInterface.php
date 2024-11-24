<?php
namespace App\Collections;
use App\Endpoints\LOL\ChampionMastery\DTO\ChampionMasteryDto;

interface BaseCollectionInterface
{
    public function add(ChampionMasteryDto $dto): void;
    public function toArray(): array;
}