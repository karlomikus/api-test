<?php

declare(strict_types=1);

namespace App;

use JsonSerializable;

class Triangle implements JsonSerializable
{
    public function __construct(
        private readonly float $a,
        private readonly float $b,
        private readonly float $c,
    )
    {
    }

    public function circumference(): float
    {
        return $this->a + $this->b + $this->c;
    }

    public function surface(): float
    {
        $s = $this->circumference() / 2;

        return sqrt(
            abs($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c))
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'type' => 'triangle',
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'surface' => round($this->surface(), 2),
            'circumference' => round($this->circumference(), 2),
        ];
    }
}
