<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
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

Route::get('/login', [AuthController::class, "index"])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot_pass');
Route::get('/reset-password', [AuthController::class, 'reset'])->name('reset_pass');
Route::get('/verify-email', [AuthController::class, 'verifyEmail']);
Route::get('/resend-verify-email/{email}', [AuthController::class, 'resendVerifyEmail'])->name('resend_email');

Route::post('/register', [AuthController::class, 'registerPost'])->name('register_post');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login_post');

Route::group(['middleware' => 'auth'], function () {
    //All the routes that belongs to the group goes here
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::post('create-new-post',[PostController::class,"savePost"])->name("craete_new_post");
    Route::post('get-user',[AuthController::class,"getUser"]);
    Route::post('follow-user',[FollowerController::class,"followUser"]);
    Route::post('like-post',[LikeController::class,"likePost"]);

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
