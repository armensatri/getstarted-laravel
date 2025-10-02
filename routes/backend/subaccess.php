<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Manageaccess\{
  RoleAccessMenuController,
  RoleAccessSubmenuController,
  RoleAccessPermissionController,
};

Route::group(
  [
    'middleware' => [
      'auth',
      'permission',
    ],
  ],
  function () {
    Route::controller(RoleAccessMenuController::class)->group(
      function () {
        Route::get(
          '/access/menu/role/{url}/{name}',
          'accessMenu'
        )->name('access.menu');

        Route::post(
          '/access/menu/role',
          'accessUpMenu'
        )->name('access.up.menu');
      }
    );
  }
);
