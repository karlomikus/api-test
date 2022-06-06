<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\RequestLogCollection;
use App\Http\Resources\RequestLogResource;
use App\Models\RequestLog;

class RequestLogController extends Controller
{
    public function index()
    {
        return new RequestLogCollection(RequestLog::paginate(5));
    }

    public function show(int $id)
    {
        return new RequestLogResource(RequestLog::findOrFail($id));
    }
}
