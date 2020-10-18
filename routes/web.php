<?php

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
    return view('welcome');
});

Route::get('/profile', '\App\Http\Controllers\UserController@index')->name('profile');
Route::post('/profile/update', '\App\Http\Controllers\UserController@updateProfile')->name('profile.update');

Route::post('/posts', '\App\Http\Controllers\PostController@store')->name('ekrem');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
