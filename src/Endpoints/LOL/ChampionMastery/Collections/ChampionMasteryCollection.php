<?php
namespace App\Endpoints\LOL\ChampionMastery\Collections;
use App\Collections\BaseCollectionInterface;
use App\Endpoints\LOL\ChampionMastery\DTO\ChampionMasteryDto;
use Countable;
use IteratorAggregate;
use Traversable;

class ChampionMasteryCollection implements BaseCollectionInterface, Countable, IteratorAggregate
{
    private array $items = [];
    public function add(ChampionMasteryDto $dto): void
    {
        $this->items[] = $dto;
    }
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->items);
    }
    public function count(): int
    {
        return count($this->items);
    }
    public function toArray(): array
    {
        return $this->items;
    }
}