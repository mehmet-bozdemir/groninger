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

Route::get('/profile', '\App\Http\Controllers\UserController@create')->name('profileForm');
Route::post('/profile/update', '\App\Http\Controllers\UserController@updateProfile')->name('profileUpdate');
Route::get('/profiles', '\App\Http\Controllers\UserController@index')->name('profiles');
Route::get('/profiles/{user}', '\App\Http\Controllers\UserController@show')->name('profile');

Route::get('/posts/create', '\App\Http\Controllers\PostController@create')->name('postForm');

Route::middleware('auth')->group(function(){
    Route::get('/home', '\App\Http\Controllers\PostController@index')->name('home');
    Route::post('/posts', '\App\Http\Controllers\PostController@store')->name('home.store');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
