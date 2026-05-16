<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LightController;

Route::get('/', [LightController::class, 'showIndex'])
    ->name('lights.index');

    Route::get('/lights', [LightController::class, 'showIndex'])
    ->name('lights.list');

Route::get('/type/{id}', [LightController::class, 'showByType'])
    ->name('lights.type');

Route::get('/light/{id}', [LightController::class, 'showDetail'])
    ->name('lights.detail');
Route::get('/lights/create', [LightController::class, 'create'])
    ->name('lights.create');

Route::post('/lights', [LightController::class, 'store'])
    ->name('lights.store');

Route::get('/lights/edit/{id}', [LightController::class, 'edit'])
    ->name('lights.edit');

Route::patch('/lights/{id}', [LightController::class, 'update'])
    ->name('lights.update');

Route::delete('/lights/{id}', [LightController::class, 'destroy'])
    ->name('lights.destroy');