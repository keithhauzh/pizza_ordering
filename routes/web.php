<?php

use Illuminate\Support\Facades\Route;

// "require" files corresponding to the routes we want to get
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;


// home
Route::get('/', [ HomeController::class, 'loadHomePage' ]);

// login page
Route::get('/login', [ LoginController::class, 'loadLoginPage' ]);
//login logic
Route::post('/login', [ LoginController::class, 'doLogin' ]);

// signup page
Route::get('/signup', [ SignupController::class, 'loadSignUpPage' ]);
// signup logic
Route::post('/signup', [ SignupController::class, 'doSignUp' ]);


// logout 
Route::get('/logout', [ LogoutController::class, 'logout' ]);




