<?php

use Illuminate\Support\Facades\Route;

// "require" files corresponding to the routes we want to get
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

// home
Route::get('/', [ HomeController::class, 'loadHomePage' ]);

// login page
Route::post('/login', [ LoginController::class, 'loadLoginPage' ]);
//login logic
Route:get



Route::get('/signup', function () {
    return view('signup');
});




