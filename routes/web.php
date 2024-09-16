<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 

Route::get('/contactus', function () {
    return view('contactus');
})->name('contact'); 

Route::get('/about', function () {
    return view('about');
})->name('about'); 

Route::get('/user/{name?}', function ($name = null) {
    $userName = preg_replace('/[^a-zA-Z]/', '', $name);
    $userName = $userName ?: 'Guest';
    $userName = ucfirst(strtolower($userName));
    session()->flash('user_name', $userName);

    return redirect()->route('welcome');
});