<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/users/{user:name}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');





Route::get('/nazerke', function(){
    return view('deleteWelcomeEmail');
});



Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/languageDemo', 'App\Http\Controllers\DashboardController@languageDemo');

Route::get('aaa', function(){
    return view('deleteLAter');
});




Route::get('/profile', [UserController::class, 'profile']);
Route::post('/profile', [UserController::class, 'update_avatar']);