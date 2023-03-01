<?php

use App\Http\Controllers\GithubLoginController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/login/github', [GithubLoginController::class, 'LoginGithubController'])->name('LoginGithub');
Route::get('/login/github/callback', [GithubLoginController::class, 'LoginGithubHandleController'])->name('LoginGithubHandle');
Route::get('/login/google', [GoogleLoginController::class, 'LoginGoogleController'])->name('LoginGoogle');
Route::get('/login/google/callback', [GoogleLoginController::class, 'LoginGoogleHandleController'])->name('LoginGoogleHandle');
Route::get('/login/facebook', [FacebookLoginController::class, 'LoginFacebookController'])->name('LoginFacebook');
Route::get('/login/facebook/callback', [FacebookLoginController::class, 'LoginFacebookHandleController'])->name('LoginFacebookHandle');
Route::get('/logout', function() {
    Auth::logout();
});