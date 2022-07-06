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
Route::get('/reply/post', App\Http\Controllers\Reply\PostController::class);

Route::get('/thread/index', App\Http\Controllers\Thread\IndexController::class);

Route::get('/thread/launch', App\Http\Controllers\Thread\LaunchController::class);

Route::post('/thread/post', App\Http\Controllers\Thread\PostController::class);

Route::get('/thread/{thread_id}', App\Http\Controllers\Thread\ShowController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
