<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clove;
use App\Http\Controllers\Chamber;
use App\Http\Controllers\Yoru;
use App\Http\Controllers\Form;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MobilHomeController;
use App\Http\Controllers\MotorController;

Route::resource('home', Clove::class);
Route::resource('contact', Chamber::class);
Route::resource('about', Yoru::class);
Route::resource('form', Form::class);
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);
Route::resource('mobilhome', MobilHomeController::class);
