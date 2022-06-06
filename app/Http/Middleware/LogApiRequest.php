<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\RequestLog;
use Illuminate\Http\Request;

class LogApiRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $requestLog = new RequestLog();
        $requestLog->route = $request->fullUrl();
        $requestLog->response_status = $response->getStatusCode();
        $requestLog->save();

        return $response;
    }
}
