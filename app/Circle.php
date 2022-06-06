<?php

declare(strict_types=1);

namespace App;

use JsonSerializable;

class Circle implements JsonSerializable
{
    public function __construct(
        private readonly float $r
    )
    {
    }

    public function circumference(): float
    {
        return ($this->r * 2) * pi();
    }

    public function surface(): float
    {
        return pi() * ($this->r * $this->r);
    }

    public function jsonSerialize(): mixed
    {
        return [
            'type' => 'circle',
            'radius' => $this->r,
            'surface' => round($this->surface(), 2),
            'circumference' => round($this->circumference(), 2),
        ];
    }
}
