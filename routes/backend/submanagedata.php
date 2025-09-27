<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Managedata\VisitorController;

Route::middleware(
  [
    'auth',
    'permission'
  ]
)->prefix('visitor')->name('visitor.')->controller(
  VisitorController::class
)->group(
  function () {
    Route::get('/online', 'online')->name('online');
    Route::get('/banned', 'banned')->name('banned');
    Route::get('/offline', 'offline')->name('offline');
    Route::get('/device', 'device')->name('device');
  }
);
