<?php
namespace RiotGamesPHP\Endpoints\LOL\LeagueExp\Collections;

use RiotGamesPHP\Collections\BaseCollectionInterface;

class LeagueEntryCollection implements BaseCollectionInterface, \Countable, \IteratorAggregate
{
    private array $items = [];
    public function add($dto): void
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