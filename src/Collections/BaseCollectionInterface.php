<?php
namespace App\Collections;
use App\Endpoints\LOL\ChampionMastery\DTO\ChampionMasteryDto;

interface BaseCollectionInterface
{
    public function add($dto): void;
    public function toArray(): array;
}