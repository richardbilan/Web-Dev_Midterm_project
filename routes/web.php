<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;

Route::middleware([LogRequests::class])->group(function () {
    Route::get('/', function (Request $request) {
        return view('welcome');
    })->name('welcome');

    Route::get('/contactus', function () {
        return view('contactus');
    })->name('contact');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/restricted-dashboard', function () {
        return "Access Restricted GURANG KANA! DAE KANA MAG KASTA!";
    });

    Route::get('/access-denied', function () {
        return "Access Denied PATAL MINOR KA!";
    });
});

// Apply CheckAge middleware specifically to these routes
Route::middleware([CheckAge::class])->group(function () {
    Route::get('/welcome', function (Request $request) {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
