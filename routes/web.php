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

Route::resource('posts','PostController')->only('index','show','destroy');
//dd(storage_path());

Route::get('mobile',[\App\Http\Controllers\AuthController::class,'getMobile'])->name('getmobile');
Route::post('checkmobile',[\App\Http\Controllers\AuthController::class,'checkMobile'])->name('checkmobile');
Route::get('password',[\App\Http\Controllers\AuthController::class,'getPassword'])->name('getpassword');
Route::post('checkpassword',[\App\Http\Controllers\AuthController::class,'checkPassword'])->name('checkpassword');
Route::get('code',[\App\Http\Controllers\AuthController::class,'getCode'])->name('getcode');
Route::post('checkcode',[\App\Http\Controllers\AuthController::class,'checkCode'])->name('checkcode');
Route::get('register',[\App\Http\Controllers\AuthController::class,'showRegister'])->name('showregister');
Route::post('register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');
