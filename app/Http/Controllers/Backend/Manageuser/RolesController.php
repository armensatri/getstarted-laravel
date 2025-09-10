<?php

namespace App\Http\Controllers\Backend\Manageuser;

use Illuminate\Http\Request;
use App\Models\Manageuser\Role;
use App\Http\Controllers\Controller;
use App\Traits\Controllers\ValidationUnique;

use App\Http\Requests\Manageuser\Role\{
  RoleSr,
  RoleUr,
};

class RolesController extends Controller
{
  use ValidationUnique;

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $roles = Role::query()
      ->select([
        'id',
        'sr',
        'name',
        'bg',
        'text',
        'description',
        'url',
        'guard_name'
      ])
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.manageuser.roles.index', [
      'title' => 'Semua data roles',
      'roles' => $roles
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(RoleSr $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Role $role)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Role $role)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(RoleUr $request, Role $role)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Role $role)
  {
    //
  }
}
