<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LightController;

Route::get('/', [LightController::class, 'showIndex'])
    ->name('lights.index');

Route::get('/type/{id}', [LightController::class, 'showByType'])
    ->name('lights.type');

Route::get('/light/{id}', [LightController::class, 'showDetail'])
    ->name('lights.detail');