<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Triangle;

class TriangleController extends Controller
{
    public function calculate(float $a, float $b, float $c)
    {
        $triangle = new Triangle($a, $b, $c);

        return response()->json($triangle, options: JSON_PRESERVE_ZERO_FRACTION);
    }
}
