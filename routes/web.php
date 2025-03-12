<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [GameController::class, 'index']);
Route::get('/zeus', function () {
    return view('zeus/home');
});
