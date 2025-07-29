<?php

use App\Http\Controllers\clove;
use App\Http\Controllers\chamber;
use App\Http\Controllers\yoru;
use App\Http\Controllers\form;
use Illuminate\Support\Facades\Route;


Route::resource('home', clove::class);
Route::resource('contact', chamber::class);
Route::resource('about', yoru::class);
Route::resource('form', form::class);
