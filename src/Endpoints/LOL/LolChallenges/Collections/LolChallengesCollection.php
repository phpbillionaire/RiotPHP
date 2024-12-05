<?php
namespace RiotGamesPHP\Endpoints\LOL\LolChallenges\Collections;
use RiotGamesPHP\Collections\BaseCollectionInterface;

class LolChallengesCollection implements BaseCollectionInterface, \Countable, \IteratorAggregate
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