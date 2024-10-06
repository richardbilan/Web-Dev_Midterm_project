<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;

Route::middleware([LogRequests::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

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

// Apply CheckAge middleware with a minimum age parameter
Route::middleware([CheckAge::class.':18'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
