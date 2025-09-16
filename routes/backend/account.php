<?php

use App\Http\Controllers\Backend\Account\PersonalController;
use App\Http\Controllers\Backend\Account\PersonalPublicController;
use Illuminate\Support\Facades\Route;

Route::group(
  [
    'middleware' => [
      'auth',
      'submenu.access',
      'permission'
    ]
  ],
  function () {
    Route::get('/personal', [PersonalController::class, 'index'])
      ->name('personal');

    Route::get('/personal/public', [
      PersonalPublicController::class,
      'index'
    ])->name('personal.public');
  }
);
