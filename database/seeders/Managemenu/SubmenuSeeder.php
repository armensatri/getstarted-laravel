<?php

namespace Database\Seeders\Managemenu;

use Illuminate\Database\Seeder;
use App\Models\Managemenu\Submenu;

class SubmenuSeeder extends Seeder
{
  public function run(): void
  {
    $submenus = [
      // ID 1 OWNER
      [
        'menu_id' => 1,
        'ssm' => 1,
        'name' => 'owner',
        'slug' => 'owner',
        'route' => '/owner',
        'active' => 'owner',
        'routename' => '/owner',
        'description' => 'dashboard owner'
      ],

      // ID 2 SUPERADMIN
      [
        'menu_id' => 2,
        'ssm' => 1,
        'name' => 'superadmin',
        'slug' => 'superadmin',
        'route' => '/superadmin',
        'active' => 'superadmin',
        'routename' => '/superadmin',
        'description' => 'dashboard superadmin'
      ],

      // ID 3 ADMIN
      [
        'menu_id' => 3,
        'ssm' => 1,
        'name' => 'admin',
        'slug' => 'admin',
        'route' => '/admin',
        'active' => 'admin',
        'routename' => '/admin',
        'description' => 'dashboard admin'
      ],

      // ID 4 MEMBER
      [
        'menu_id' => 4,
        'ssm' => 1,
        'name' => 'member',
        'slug' => 'member',
        'route' => '/member',
        'active' => 'member',
        'routename' => '/member',
        'description' => 'dashboard admin'
      ],

      // ID 5 ACCOUNT
      [
        'menu_id' => 5,
        'ssm' => 1,
        'name' => 'personal',
        'slug' => 'personal',
        'route' => '/personal',
        'active' => 'personal',
        'routename' => '/personal',
        'description' => 'personal profile'
      ],
      [
        'menu_id' => 5,
        'ssm' => 2,
        'name' => 'personal public',
        'slug' => 'personal-public',
        'route' => '/personal/public',
        'active' => 'personal/public',
        'routename' => '/personal/public',
        'description' => 'personal public profile'
      ],

      // ID 6 MANAGEDATA
      [
        'menu_id' => 6,
        'ssm' => 1,
        'name' => 'data',
        'slug' => 'data',
        'route' => '/data/system',
        'active' => 'data/system',
        'routename' => '/data/system',
        'description' => 'data system'
      ],
      [
        'menu_id' => 6,
        'ssm' => 2,
        'name' => 'visitor',
        'slug' => 'visitor',
        'route' => '/data/visitor',
        'active' => 'data/visitor',
        'routename' => '/data/visitor',
        'description' => 'data user visitor'
      ],
      [
        'menu_id' => 6,
        'ssm' => 3,
        'name' => 'access',
        'slug' => 'access',
        'route' => '/access/system',
        'active' => 'access/system',
        'routename' => '/access/system',
        'description' => 'data access system'
      ],
      [
        'menu_id' => 6,
        'ssm' => 4,
        'name' => 'statistic',
        'slug' => 'statistic',
        'route' => '/statistic/system',
        'active' => 'statistic/system',
        'routename' => '/statistic/system',
        'description' => 'data statistic system'
      ],

      // ID 7 MANAGEUSER
      [
        'menu_id' => 7,
        'ssm' => 1,
        'name' => 'users',
        'slug' => 'users',
        'route' => '/users',
        'active' => 'users',
        'routename' => '/users',
        'description' => 'data users'
      ],
      [
        'menu_id' => 7,
        'ssm' => 2,
        'name' => 'roles',
        'slug' => 'roles',
        'route' => '/roles',
        'active' => 'roles',
        'routename' => '/roles',
        'description' => 'data roles'
      ],
      [
        'menu_id' => 7,
        'ssm' => 3,
        'name' => 'permissions',
        'slug' => 'permissions',
        'route' => '/permissions',
        'active' => 'permissions',
        'routename' => '/permissions',
        'description' => 'data permissions'
      ],

      // ID 8 MANAGEMENU
      [
        'menu_id' => 8,
        'ssm' => 1,
        'name' => 'menus',
        'slug' => 'menus',
        'route' => '/menus',
        'active' => 'menus',
        'routename' => '/menus',
        'description' => 'data menus'
      ],
      [
        'menu_id' => 8,
        'ssm' => 2,
        'name' => 'submenus',
        'slug' => 'submenus',
        'route' => '/submenus',
        'active' => 'submenus',
        'routename' => '/submenus',
        'description' => 'data submenus'
      ],

      // ID 9 PUBLISHED
      [
        'menu_id' => 9,
        'ssm' => 1,
        'name' => 'statuses',
        'slug' => 'statuses',
        'route' => '/statuses',
        'active' => 'statuses',
        'routename' => '/statuses',
        'description' => 'data statuses'
      ],
    ];

    foreach ($submenus as $submenu) {
      Submenu::create($submenu);
    }
  }
}
