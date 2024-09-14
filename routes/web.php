<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // Name the route

Route::get('/contactus', function () {
    return view('contactus');
})->name('contact'); // Name the route

Route::get('/about', function () {
    return view('about');
})->name('about'); // Name the route

Route::get('/user/{name?}', function ($name = null) {
    $userName = preg_replace('/[^a-zA-Z]/', '', $name);

    $userName = $userName ?: 'Guest';

    $userName = ucfirst(strtolower($userName));

    session()->flash('user_name', $userName);

    return redirect()->route('welcome'); // Redirect to named route
});

// Display the login form
Route::get('/login', function () {
    return view('login'); // Make sure 'login' corresponds to 'resources/views/login.blade.php'
})->name('login');

// Handle the login form submission
Route::post('/login', function (Request $request) {
    // Validate the form data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to log the user in
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Redirect to the intended page or a dashboard
        return redirect()->intended('/dashboard');
    }

    // If login fails, redirect back with an error message
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
});
