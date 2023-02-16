<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Models\User;
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

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/add', 'add');
    Route::get('/blocked', 'blocked')->name('blocked');
    Route::get('/single', 'single');
    Route::get('/user', 'user');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('/registration', 'registration')->name('register');
    Route::post('/auth', 'auth')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});



