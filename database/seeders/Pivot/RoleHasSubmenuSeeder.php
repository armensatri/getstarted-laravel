<?php

namespace Database\Seeders\Pivot;

use Illuminate\Database\Seeder;
use App\Models\Manageuser\Role;
use App\Models\Managemenu\Submenu;

class RoleHasSubmenuSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::whereIn('name', [
      'owner',
      'superadmin',
      'admin',
      'member',
    ])->get()->keyBy('name');

    $submenus = Submenu::whereIn('name', [
      // OWNER
      'owner',

      // SUPERADMIN
      'superadmin',

      // ADMIN
      'admin',

      // MEMBER
      'member',

      // ACCOUNT
      'personal',
      'personal public',

      // MANAGEDATA
      'data',
      'visitor',
      'access',
      'statistic',

      // MANAGEUSER
      'users',
      'roles',
      'permissions',

      // MANAGEMENU
      'menus',
      'submenus',

      // PIBLISHED
      'statuses',
    ])->get()->keyBy('name');

    $roleHasSubmenus = [
      'owner' => [
        // OWNER
        'owner',

        // SUPERADMIN
        // 'superadmin',

        // ADMIN
        // 'admin',

        // MEMBER
        // 'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        'data',
        'visitor',
        'access',
        'statistic',

        // MANAGEUSER
        'users',
        'roles',
        'permissions',

        // MANAGEMENU
        'menus',
        'submenus',

        // PIBLISHED
        'statuses',
      ],

      'superadmin' => [
        // OWNER
        // 'owner',

        // SUPERADMIN
        'superadmin',

        // ADMIN
        // 'admin',

        // MEMBER
        // 'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        'data',
        'visitor',
        'access',
        'statistic',

        // MANAGEUSER
        'users',
        'roles',
        'permissions',

        // MANAGEMENU
        'menus',
        'submenus',

        // PIBLISHED
        'statuses',
      ],

      'admin' => [
        // OWNER
        // 'owner',

        // SUPERADMIN
        // 'superadmin',

        // ADMIN
        'admin',

        // MEMBER
        // 'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        // 'data',
        // 'visitor',
        // 'access',
        // 'statistic',

        // MANAGEUSER
        // 'users',
        // 'roles',
        // 'permissions',

        // MANAGEMENU
        // 'menus',
        // 'submenus',

        // PIBLISHED
        // 'statuses',
      ],

      'member' => [
        // OWNER
        // 'owner',

        // SUPERADMIN
        // 'superadmin',

        // ADMIN
        // 'admin',

        // MEMBER
        'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        // 'data',
        // 'visitor',
        // 'access',
        // 'statistic',

        // MANAGEUSER
        // 'users',
        // 'roles',
        // 'permissions',

        // MANAGEMENU
        // 'menus',
        // 'submenus',

        // PIBLISHED
        // 'statuses',
      ],
    ];

    foreach ($roleHasSubmenus as $roleName => $submenuNames) {
      if (isset($roles[$roleName])) {
        $submenuIds = collect($submenuNames)
          ->filter(fn($name) => isset($submenus[$name]))
          ->map(fn($name) => $submenus[$name]->id)
          ->toArray();

        $roles[$roleName]->submenus()->syncWithoutDetaching($submenuIds);
      }
    }
  }
}
