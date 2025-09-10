<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Dashboard\{
  AdminController,
  OwnerController,
  MemberController,
  SuperadminController,
};

Route::group(
  [
    'middleware' => [
      'auth'
    ]
  ],
  function () {
    Route::get('/owner', [OwnerController::class, 'index'])
      ->name('owner');

    Route::get('/superadmin', [SuperadminController::class, 'index'])
      ->name('superadmin');

    Route::get('/admin', [AdminController::class, 'index'])
      ->name('admin');

    Route::get('/member', [MemberController::class, 'index'])
      ->name('member');
  }
);
