<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/register', 'auth.register')->name('register.view');
Route::view('/login', 'auth.login')->name('login.view');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return 'Welcome to the Dashboard!';
})->middleware('auth')->name('dashboard');
Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');