<?php

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
