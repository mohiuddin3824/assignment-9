<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/hello", [UserController::class, "hello"]);

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/profile/{id?}', [ProfileController::class, 'index']);
=======
Route::get('/profile/{id}', [ProfileController::class, 'index']);
>>>>>>> 8b4faf9f5a700158ed257cc2ddeeaa8b5849e9c0
