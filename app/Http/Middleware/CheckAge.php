<?php

// app/Http/Middleware/CheckAge.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->age < 18) {
            return redirect('access-denied');
        } elseif ($request->age >= 21) {
            return redirect('restricted-dashboard');
        }

        return $next($request);
    }
}
