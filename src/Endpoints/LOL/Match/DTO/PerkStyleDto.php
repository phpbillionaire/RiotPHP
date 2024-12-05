<?php
namespace RiotGamesPHP\Endpoints\LOL\Match\DTO;

use RiotGamesPHP\Endpoints\LOL\Match\Collections\MatchCollection;

final readonly class PerkStyleDto
{
    private string $description;
    private MatchCollection $selections;
    private int $styles;
    public function __construct(string $description, MatchCollection $selections, int $styles)
    {
        $this->description = $description;
        $this->selections = $selections;
        $this->styles = $styles;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSelections(): MatchCollection
    {
        return $this->selections;
    }

    public function getStyles(): int
    {
        return $this->styles;
    }

}