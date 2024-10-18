<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;

// Redirect to login page when accessing root URL
Route::get('/', function () {
    return redirect()->route('login'); // Redirect to login page
})->name('home');

// Route for login page
Route::get('/login', function () {
    return view('auth.login'); // Ensure this view exists
})->name('login');

// Handle login submission (add logic to check for guest login)
Route::post('/login', function (Request $request) {
    $username = $request->input('username');

    // Check if user logs in as a guest
    if ($username === 'guest') {
        // Redirect guest to the welcome page
        return redirect()->route('welcome', ['username' => $username]);
    }

    // Otherwise, redirect to the dashboard or other page
    return redirect()->route('dashboard');
})->name('login.submit');

// Group routes with LogRequests middleware
Route::middleware([LogRequests::class])->group(function () {

    Route::get('/contactus', function () {
        return view('contactus');
    })->name('contact');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/restricted-dashboard', function () {
        return "Access Restricted!";
    });

    Route::get('/access-denied', function () {
        return "Access Denied!";
    });
});

// Views for Labs
Route::get('/Lab1', function () {
    return view('Lab1');
});
Route::get('/Lab2', function () {
    return view('Lab2');
});
Route::get('/Lab3', function () {
    return view('Lab3');
});
Route::get('/Lab4', function () {
    return view('Lab4');
});

// Apply CheckAge middleware with a minimum age parameter
Route::middleware([CheckAge::class . ':18'])->group(function () {
    Route::get('/welcome', function (Request $request) {
        $username = $request->query('username');
        return view('welcome', compact('username'));
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
