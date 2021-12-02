<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/'], static function () {
    Route::get('/', [LandingPageController::class, 'index']);
    Route::get('user/login', [LandingPageController::class, 'index'])->name('login');
    Route::get('user/register', [LandingPageController::class, 'register'])->name('register');
});

Route::group(['prefix' => '/user'], static function () {
    Route::post('/login', [AuthController::class, 'loginAuth'])->name('loginauth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/register', [AuthController::class, 'createUser'])->name('createuser');
    Route::get('/registerSuccess', [AuthController::class, 'registerSUccess'])->name('registerSuccess');
    Route::resource('/tasks', TasksController::class)->middleware('auth');
});


