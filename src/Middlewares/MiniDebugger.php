<?php

namespace GentritAbazi\MiniLogger\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MiniLogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (app()->environment() != config('mini-debugger.allow_only_in_environment')) {
            return $next($request);
        }

        DB::enableQueryLog();
        $startTime = microtime(true);
       
        $response = $next($request);

        $queries = DB::getQueryLog();
        $countQueries = count($queries);
        $endTime = microtime(true);
        $responseTime = $endTime - $startTime;
        $requestUrl = $request->url();
        $requestMethod = $request->method();

        Log::info("Method: ". $requestMethod. ' - URL: '. $requestUrl. " - Queries Executed: $countQueries - Response Time: $responseTime");
        if ($countQueries) {
            Log::info($queries);
        }
      
        return $response;
    }
}
