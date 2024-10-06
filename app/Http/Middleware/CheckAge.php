<?php

// app/Http/Middleware/CheckAge.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckAge
{
    public function handle(Request $request, Closure $next, $minAge)
    {
        // Log the request before redirecting
        $logData = sprintf(
            "[%s] %s: %s, Age: %s\n",
            Carbon::now()->format('Y-m-d H:i:s'),
            $request->method(),
            $request->fullUrl(),
            $request->query('age', 'N/A')
        );

        file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);

        if ($request->age < $minAge) {
            return redirect('access-denied');
        } elseif ($request->age == 21) {
            return redirect('restricted-dashboard');
        }

        return $next($request);
    }
}
