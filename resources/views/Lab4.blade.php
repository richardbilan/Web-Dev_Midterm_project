@extends('components.layout')

@section('title', 'Web Development - Lab 4')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab4.css') }}">
@endsection

@section('content')

<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 4: Middleware Setup</h1>
    <p class="lead">This lab activity focuses on creating and implementing middleware in a Laravel project.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>Here are the steps for creating and registering middleware in Laravel.</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 1: Create Middleware</h2>
            <p>To create the <code>CheckAge</code> and <code>LogRequests</code> middleware, I used the command line:</p>
            <pre><code>
php artisan make:middleware CheckAge
php artisan make:middleware LogRequests
            </code></pre>
        </div>
    </div>
    <img src="{{ asset('images/make.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 2: Implement CheckAge Middleware</h2>
            <p>In the <code>CheckAge.php</code> file, I added logic to check if the user's age is 18 or older:</p>
            <pre><code>
public function handle(Request $request, Closure $next)
{
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
            </code></pre>
        </div>
    </div>
    <img src="{{ asset('images/checkage.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">

</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 3: Implement LogRequests Middleware</h2>
            <p>In the <code>LogRequests.php</code> file, I logged the details of all HTTP requests:</p>
            <pre><code>
public function handle(Request $request, Closure $next)
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
            </code></pre>
        </div>
    </div>
    <img src="{{ asset('images/logreq.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 4: Register Middleware</h2>
            <p>I registered both middleware in the <code>app/Http/bootstrap/app.php</code> file:</p>
            <pre><code>
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

            return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    $app->middleware([
        App\Http\Middleware\CheckAge::class,
        App\Http\Middleware\LogRequests::class,
    ]);
    
            </code></pre>
        </div>
    </div>
    <img src="{{ asset('images/bootstrapapp.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 5: Assign Middleware to Routes</h2>
            <p>I created a route group that applies the <code>CheckAge</code> middleware to specific routes:</p>
          
           
    </div>
    <img src="{{ asset('images/middlewareroutes.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 6: Create Middleware with Parameters</h2>
            <h3>Modify CheckAge Middleware</h3>
            <p>I modified the <code>CheckAge</code> middleware to accept a minimum age parameter:</p>
            <pre><code>
public function handle(Request $request, Closure $next, $minAge = 18)
{
    if ($request->age < $minAge) {
            return redirect('access-denied');
        } elseif ($request->age == 21) {
            return redirect('restricted-dashboard');
        }
}
<img src="{{ asset('images/parameter.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
            </code></pre>
            <h3>Assign Middleware with Parameter</h3>
            <p>I created a new route that enforces a different age restriction:</p>
            
            <pre><code>

            Route::get('/restricted-dashboard', function () {
        return "Access Restricted!";
    });

    Route::get('/access-denied', function () {
        return "Access Denied!";
    });


            </code></pre>
        </div>
        
    </div>
    <img src="{{ asset('images/routerestrict.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Description</h3>
    <p>Through this exercise, I learned how to create and register middleware in Laravel, apply it to specific routes, and even add parameters for more flexible control over user access. The middleware pattern in Laravel provides a clean way to handle request filtering, which is essential for building secure web applications.</p>

<p>This laboratory exercise was the most difficult activity I've encountered in Laravel so far. The most challenging part was dealing with the `Kernel.php` file. My Laravel application couldn't properly read the middleware settings from `Kernel.php`, which caused issues when trying to apply middleware to specific routes. After troubleshooting for a long time, I decided to use a workaround by registering the middleware globally in the `bootstrap/app.php` file instead. This allowed my middleware to function correctly, but it was a complex and frustrating problem to solve.</p>

<p>Despite the challenges, I gained a deeper understanding of how middleware works in Laravel, how to apply it to routes, and how to manage access control based on user input. This knowledge is essential for building secure and robust web applications, and overcoming this hurdle has given me valuable insight into the importance of properly managing middleware in Laravel projects.</p>

</div>

<a href="https://github.com/richardbilan/webdev.git" class="custom-button" target="_blank">Download Laboratory 4</a>
<br><br>

@endsection
