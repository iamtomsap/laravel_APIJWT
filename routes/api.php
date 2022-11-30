<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\AuthController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
});
