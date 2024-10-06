<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;      // Add this line
use App\Http\Middleware\LogRequests;   // Add this line

Route::middleware([LogRequests::class])->group(function () {
    Route::get('/', function () {
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

Route::middleware([CheckAge::class])->group(function () {
    Route::get('/welcome', function (Request $request) {
        $age = $request->query('age');
        
        if ($age >= 21) {
            return redirect('/restricted-dashboard'); 
        }
        
        return view('welcome'); 
    })->name('welcome'); 
});
