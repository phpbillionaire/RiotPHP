<?php
namespace RiotGamesPHP\Collections;
interface BaseCollectionInterface
{
    public function add($dto): void;
    public function toArray(): array;
}