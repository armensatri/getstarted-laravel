<?php

namespace App\Http\Controllers\Backend\Manageaccess;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manageuser\Permission;
use App\Models\Manageuser\Role;

class RoleAccessPermissionController extends Controller
{
  public function accessPermission($url)
  {
    $role = Role::query()->where('url', $url)
      ->firstOrFail();

    $permissions = Permission::query()
      ->select(['id', 'name'])
      ->orderBy('id', 'asc')
      ->get();

    $groupper = $permissions->sortBy('id')->groupBy(
      function ($permission) {
        $controller = explode('.', $permission->name)[0];
        return ucfirst($controller);
      }
    );

    return view('backend.manageaccess.permission.index', [
      'title' => 'Access permission',
      'role' => $role,
      'groupper' => $groupper
    ]);
  }
}
