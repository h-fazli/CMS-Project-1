<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\InterfaceController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('mobile',[AuthController::class,'getMobile'])->name('getmobile');
Route::post('checkmobile',[AuthController::class,'checkMobile'])->name('checkmobile');
Route::get('password',[AuthController::class,'getPassword'])->name('getpassword');
Route::post('checkpassword',[AuthController::class,'checkPassword'])->name('checkpassword');
Route::get('code',[AuthController::class,'getCode'])->name('getcode');
Route::post('checkcode',[AuthController::class,'checkCode'])->name('checkcode');
Route::get('register',[AuthController::class,'showRegister'])->name('showregister');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::prefix('admin')->middleware(['auth','role:admin'])->group(function (){
    Route::resource('users',UserController::class);
    Route::get('logout',[UserController::class,'logout'])->name('logout');
    Route::resource('posts',PostController::class)->only('index','show','destroy');
    Route::post('useractivate',[UserController::class,'activate'])->name('user.activate');
    Route::post('userdeactivate',[UserController::class,'deactivate'])->name('user.deactivate');
    Route::post('postpublish',[PostController::class,'publish'])->name('post.publish');
    Route::post('postunpublish',[PostController::class,'unpublish'])->name('post.unpublish');

});


Route::get('posts',[InterfaceController::class,'index'])->name('posts.index');
