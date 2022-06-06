<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Circle;

class CircleController extends Controller
{
    public function calculate(float $r)
    {
        $circle = new Circle($r);

        return response()->json($circle, options: JSON_PRESERVE_ZERO_FRACTION);
    }
}
