<?php

// app/Http/Middleware/LogRequests.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        $logData = sprintf(
            "[%s] %s: %s\n",
            now()->format('Y-m-d H:i:s'),
            $request->method(),
            $request->fullUrl()
        );

         file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);

        return $next($request);
    }
}
