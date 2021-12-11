<?php

use App\Http\Controllers\CharController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

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
});

Route::post('/', [LoginController::class, 'authenticate']);
Route::resource('register', RegisterController::class);

Route::resource('character', CharController::class);

Route::resource('soal', SoalController::class);



Route::get('/level', function () {
    return view('level');
});

Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/presoal', function () {
    return view('presoal');
});

Route::get('/papan', function () {
    return view('papan');
});
