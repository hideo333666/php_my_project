<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\SampleController; 

Route::get('/', [IndexController::class, 'index']);
Route::get('/top', [TopController::class, 'index']);
Route::get('/sample', [SampleController::class, 'index']); 

Route::get('/add-records', [SampleController::class, 'addRecord']);

