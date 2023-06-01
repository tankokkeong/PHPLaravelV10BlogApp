<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('login');
})->name('Login');

Route::get('/SignUp', function () {
    return view('signup');
})->name('SignUp');

Route::get('/Welcome', function () {
    return view('welcome');
})->name('Welcome')->middleware('auth');

Route::post('/SignUp', [UserController::class, 'SignUp']);
Route::post('/Login', [UserController::class, 'Login']);
Route::post('/Logout', [UserController::class, 'Logout']);