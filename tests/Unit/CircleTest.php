<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function test_calculations()
    {
        $circle = new \App\Circle(10);

        $this->assertSame(62.83, round($circle->circumference(), 2));
        $this->assertSame(314.16, round($circle->surface(), 2));
    }

    public function test_calculations_with_zeros()
    {
        $circle = new \App\Circle(0);

        $this->assertSame(0.0, round($circle->circumference(), 2));
        $this->assertSame(0.0, round($circle->surface(), 2));
    }
}
