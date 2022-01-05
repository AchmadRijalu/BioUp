<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LeaderboardController;
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

Route::get('/', function () {
    return view('login');
})->name('/')->middleware('guest');

Route::post('/', [LoginController::class, 'authenticate'])->middleware('throttle:loginweb');
Route::get('/testing', function(){
    return view('testing');
});
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('register', RegisterController::class)->middleware('guest');

Route::resource('character', CharController::class)->middleware('auth');

Route::resource('soal', SoalController::class)->middleware('auth');

Route::resource('level', LevelController::class)->middleware('auth');

Route::resource('papan', LeaderboardController::class)->middleware('auth');

// Route::get('/level', function () {
//     return view('level');
// })

Route::get('/tentang', function () {
    return view('tentang');
})->middleware('auth');
Route::get('/presoal', function () {
    return view('presoal');
})->middleware('auth');

// Route::get('/papan', function () {
//     return view('papan');
// })->middleware('auth');

Route::get('/pupup', function(){
return view('PupUp');
});
