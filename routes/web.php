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


//dd(storage_path());

Route::get('mobile',[\App\Http\Controllers\AuthController::class,'getMobile'])->name('getmobile');
Route::post('checkmobile',[\App\Http\Controllers\AuthController::class,'checkMobile'])->name('checkmobile');
Route::get('password',[\App\Http\Controllers\AuthController::class,'getPassword'])->name('getpassword');
Route::post('checkpassword',[\App\Http\Controllers\AuthController::class,'checkPassword'])->name('checkpassword');
Route::get('code',[\App\Http\Controllers\AuthController::class,'getCode'])->name('getcode');
Route::post('checkcode',[\App\Http\Controllers\AuthController::class,'checkCode'])->name('checkcode');
Route::get('register',[\App\Http\Controllers\AuthController::class,'showRegister'])->name('showregister');
Route::post('register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');

Route::prefix('admin')->middleware(['auth','Role:admin'])->group(function (){
    Route::resource('users',\App\Http\Controllers\UserController::class);
    Route::resource('posts',\App\Http\Controllers\PostController::class)->only('index','show','destroy');
    Route::post('activate',[\App\Http\Controllers\UserController::class,'activate'])->name('activate');
    Route::post('deactivate',[\App\Http\Controllers\UserController::class,'deactivate'])->name('deactivate');
});

Route::prefix('user')->middleware(['auth','Role:user'])->group(function (){

});

//Route::resource('admin/users',\App\Http\Controllers\UserController::class,['middleware' => ['auth','Role:admin']]);

//Route::get('test',function () {
//   return view('admin.users.index');
//});
