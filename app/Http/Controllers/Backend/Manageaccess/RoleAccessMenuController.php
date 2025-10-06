<?php

namespace App\Http\Controllers\Backend\Manageaccess;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Managemenu\Menu;
use App\Models\Manageuser\Role;

class RoleAccessMenuController extends Controller
{
  public function accessMenu($url)
  {
    $role = Role::where('url', $url)->firstOrFail();

    $menus = Menu::query()
      ->select(['id', 'sm', 'name', 'url'])
      ->orderBy('sm', 'asc')
      ->paginate(15);

    return view('backend.manageaccess.menu.index', [
      'title' => 'Access menu',
      'role' => $role,
      'menus' => $menus
    ]);
  }
}
