<?php

namespace Database\Seeders\Pivot;

use Illuminate\Database\Seeder;
use App\Models\Manageuser\Role;
use App\Models\Manageuser\Permission;

class RoleHasPermissionSeeder extends Seeder
{
  public function run(): void
  {
    $roles = collect([
      'owner',
      'superadmin',
      'admin',
      'member'
    ])->mapWithKeys(fn($roleName) => [
      $roleName = Role::firstOrCreate(
        ['name' => $roleName],
        ['guard_name' => 'web']
      ),
    ]);

    $roleHasPermissions = [
      'owner' => [
        // USERS
        'users.index',
        'users.create',
        'users.store',
        'users.show',
        'users.edit',
        'users.update',
        'users.destroy',

        // ROLES
        'roles.index',
        'roles.create',
        'roles.store',
        'roles.show',
        'roles.edit',
        'roles.update',
        'roles.destroy',

        // PERMISSIONS
        'permissions.index',
        'permissions.create',
        'permissions.store',
        'permissions.show',
        'permissions.edit',
        'permissions.update',
        'permissions.destroy',
      ],

      'superadmin' => [],

      'admin' => [],

      'member' => [],
    ];

    foreach ($roleHasPermissions as $roleName => $permissions) {
      $role = Role::where('name', $roleName)->first();

      if (!$role) {
        continue;
      }

      foreach ($permissions as $permissionName) {
        Permission::firstOrCreate(
          ['name' => $permissionName],
          ['guard_name' => 'web']
        );
      }

      $permissionIds = Permission::whereIn('name', $permissions)
        ->pluck('id');

      $role->permissions()->sync($permissionIds);
    }
  }
}
