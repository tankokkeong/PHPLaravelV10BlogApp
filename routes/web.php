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
})->name('Login')->middleware('guest');

Route::get('/SignUp', function () {
    return view('signup');
})->name('SignUp')->middleware('guest');

Route::get('/Home', function () {
    return view('home');
})->name('Home')->middleware('auth');

Route::post('/SignUp', [UserController::class, 'SignUp']);
Route::post('/Login', [UserController::class, 'Login']);
Route::post('/Logout', [UserController::class, 'Logout']);

Route::fallback(function () {
    return view('Home');
});