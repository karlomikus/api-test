<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    public function test_calculations()
    {
        $triangle = new \App\Triangle(3, 4, 5);

        $this->assertSame(12.0, $triangle->circumference());
        $this->assertSame(6.0, $triangle->surface());
    }

    public function test_calculations_with_zeros()
    {
        $triangle = new \App\Triangle(0, 0, 0);

        $this->assertSame(0.0, $triangle->circumference());
        $this->assertSame(0.0, $triangle->surface());
    }
}
