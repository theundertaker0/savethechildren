<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::prefix('v1')->group(function () {
    Route::post('track/add', [TrackController::class, 'addTrack']);
});
