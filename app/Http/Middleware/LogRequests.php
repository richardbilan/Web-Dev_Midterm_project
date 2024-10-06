<?php

// app/Http/Middleware/LogRequests.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    public function terminate(Request $request, $response)
    {
        $logData = sprintf(
            "[%s] %s: %s\n",
            Carbon::now()->format('Y-m-d H:i:s'),
            $request->method(),
            $request->fullUrl()
        );

        file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);
    }
}


