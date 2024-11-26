<?php
namespace App\Endpoints\LOL\Match\DTO;
final readonly class PerkStyleSelectionDto
{
    public function __construct(
        private int $perk,
        private int $var1,
        private int $var2,
        private int $var3
    ) {}

    public function getPerk(): int
    {
        return $this->perk;
    }

    public function getVar1(): int
    {
        return $this->var1;
    }

    public function getVar2(): int
    {
        return $this->var2;
    }

    public function getVar3(): int
    {
        return $this->var3;
    }

}