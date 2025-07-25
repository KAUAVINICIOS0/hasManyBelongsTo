<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// ROUTE FOR SERVICE TYPES
Route::get('/service-types', [ServiceTypeController::class, 'index'])->name('service-types');

Route::get('/create-service-types', [ServiceTypeController::class, 'create'])->name('create-service-types');

Route::post('/create-service-types-action', [ServiceTypeController::class, 'store'])->name('create-service-types-action');

//ROUTE FOR SERVICES
Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/create-services', [ServiceController::class, 'create'])->name('create-services');

Route::post('/create-services-action', [ServiceController::class, 'store'])->name('create-services-action');
