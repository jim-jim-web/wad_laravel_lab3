<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Goal;

Route::get('/home', [Home::class, 'index']);

Route::get('/about', [About::class, 'index']);

Route::get('/goal', [Goal::class, 'index']);