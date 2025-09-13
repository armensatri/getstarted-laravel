<?php

namespace App\Http\Controllers\Backend\Managemenu;

use Illuminate\Http\Request;
use App\Models\Managemenu\Submenu;
use App\Http\Controllers\Controller;
use App\Traits\Controllers\ValidationUnique;

use App\Http\Requests\Managemenu\Submenu\{
  SubmenuSr,
  SubmenuUr,
};

class SubmenusController extends Controller
{
  use ValidationUnique;

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $submenus = Submenu::query()
      ->search(request(['search', 'menu']))
      ->select([
        'id',
        'menu_id',
        'ssm',
        'name',
        'description',
        'url'
      ])
      ->with(['menu:id,name'])
      ->orderBy('menu_id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managemenu.submenus.index', [
      'title' => 'Semua data submenus',
      'submenus' => $submenus
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
  public function store(SubmenuSr $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Submenu $submenu)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Submenu $submenu)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(SubmenuUr $request, Submenu $submenu)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Submenu $submenu)
  {
    //
  }
}
