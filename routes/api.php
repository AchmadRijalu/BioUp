<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\CharacterController;
use App\Http\Controllers\API\LevelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisterController::class, 'register']);
//mencegah user untuk bisa attack server dengan method spam login. setiap 10 kali login, ada jeda 10 menit
Route::post('login', [LoginController::class, 'Login'])->middleware('throttle:login');
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);
    Route::get('character', [CharacterController::class, 'getAllChara']);
    Route::get('character/{charID}', [CharacterController::class, 'getLevelByChara']);
    Route::get('character/{charID}/{levelID}', [LevelController::class, 'getSoalByLevel']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
