<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FollowController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
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
Route::post('/authenticate',[AuthController::class, 'login']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/profiles', [UserController::class, 'index']);
    Route::get('/profiles/{user}', [UserController::class, 'show']);
    Route::put('/profiles/{user}', [UserController::class, 'updateProfile']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/likes', [LikeController::class, 'index']);
    Route::get('/follows', [FollowController::class, 'index']);
});
