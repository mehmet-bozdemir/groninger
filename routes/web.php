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


Route::middleware('auth')->group(function () {
    Route::get('/home', '\App\Http\Controllers\PostController@index')->name('home');
    Route::get('/profiles', '\App\Http\Controllers\UserController@index')->name('profiles');
    Route::get('/profiles/{user}', '\App\Http\Controllers\UserController@show')->name('profile');
    Route::get('/profileform', '\App\Http\Controllers\UserController@create')->name('profileForm');
    Route::get('/profileimageform', '\App\Http\Controllers\UserController@createImage')->name('profileImageForm');
    Route::post('/profile/update', '\App\Http\Controllers\UserController@updateProfile')->name('profileUpdate');
    Route::post('/profile/imageupdate', '\App\Http\Controllers\UserController@updateProfileImage')->name('profileImageUpdate');
    Route::post('/posts', '\App\Http\Controllers\PostController@store')->name('home.store');
    Route::post('/profiles/{user}/follow', '\App\Http\Controllers\FollowController@store');
    Route::post('/posts/{post}/like', '\App\Http\Controllers\LikeController@store');
    Route::delete('/posts/{post}/like', '\App\Http\Controllers\LikeController@destroy');
    Route::get('/posts/create', '\App\Http\Controllers\PostController@create')->name('postForm');
    Route::get('/comments/{post}/create', '\App\Http\Controllers\CommentController@create')->name('comments.create');
    Route::post('/comments/{post}/comment', '\App\Http\Controllers\CommentController@store')->name('comments.store');

});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

