<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [BlogController::class, 'index']);
Route::get('/home', [BlogController::class, 'index']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/contact', [BlogController::class, 'contact']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');

Route::get('/user/{author}', [UserController::class, 'show'])->name('user');
