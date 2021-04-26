<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

$params = [];
Route::group($params, function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');
});
