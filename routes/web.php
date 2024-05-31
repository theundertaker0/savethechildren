<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\GeofenceController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/geofences', GeofenceController::class);
Route::resource('/devices', DeviceController::class);

//Rutas de Tracking
Route::get ('/track', [TrackController::class, 'index'])->name('track');
Route::post('/track/get',[TrackController::class, 'getTrack'])->name('get-track');
