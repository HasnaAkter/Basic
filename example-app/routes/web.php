<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\NewController;

//use App\Http\Controllers\myController;

Route::resource('/photos',PhotoController::class);
//Route::get('/myself','HomeController@myself');
Route::get('/myself', [HomeController::class, 'myself']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/home', [NewController::class, 'home']);
Route::get('/about', [HomeController::class, 'myabout']);
//Route::resource('/home',myController::class,'home');
