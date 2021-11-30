<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use Illuminate\Http\Request;
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
Route::post('login', [LoginController::class, 'Login'])->middleware("throttle:10,10");
Route::group(['middleware' => 'auth:api'],function () {
    Route::post('logout', [LoginController::class,'logout']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
