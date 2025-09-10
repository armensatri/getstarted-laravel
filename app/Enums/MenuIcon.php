<?php

namespace App\Enums;

class MenuIcon
{
  public static function get(String $name)
  {
    $icons = [
      'owner' => 'dashboard.jpg',
      'superadmin' => 'dashboard.jpg',
      'admin' => 'dashboard.jpg',
      'member' => 'dashboard.jpg',

      // ACCOUNT
      'personal' => 'personal.jpg',
      'personal public' => 'personal-public.png',

      // MANAGEDATA
      'data' => 'data.png',
      'visitor' => 'visitor.jpg',
      'access' => 'access.png',
      'statistic' => 'statistic.jpg',

      // MANAGEUSER
      'users' => 'users.jpg',
      'roles' => 'roles.jpg',
      'permissions' => 'permissions.jpg',

      // MANAGEMENU
      'menus' => 'menus.jpg',
      'submenus' => 'submenus.jpg',

      // PUBLISHED
      'statuses' => 'statuses.jpg',
    ];

    $fileName = $icons[strtolower($name)] ?? '';

    return "/backend/img/menu/{$fileName}";
  }
}
