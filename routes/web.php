<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/user/register', [UserController::class,'index'])->name('user.index');

Route::post('/user/register', [UserController::class,'register'])->name('user.register');

Route::get('/user/login', [UserController::class,'loginForm'])->name('user.loginForm');

Route::post('/user/login', [UserController::class,'login'])->name('user.login');

Route::get('/user/rooms', [RoomController::class,'rooms'])->name('rooms');

Route::get('/user/rooms', [UserController::class,'rooms'])->name('rooms');

Route::get('/user/room/{room_id}', [RoomController::class,'index'])->name('room');

Route::post('/user/room/{room_id}', [RoomController::class,'store'])->name('room.store');