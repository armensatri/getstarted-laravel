<?php

namespace App\Http\Controllers\Backend\Managemenu;

use App\Helpers\RandomUrl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Traits\Controllers\ValidationUnique;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Managemenu\{
  Menu,
  Submenu,
};

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
    $menus = Menu::query()->select('id', 'name')
      ->orderBy('sm', 'asc')
      ->get();

    return view('backend.managemenu.submenus.create', [
      'title' => 'Create data submenu',
      'menus' => $menus
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(SubmenuSr $request)
  {
    $datastore = $request->validated();

    $datastore['url'] = RandomUrl::generateUrl();

    Submenu::create($datastore);

    Alert::success(
      'success',
      'Data submenu! berhasil di tambahkan.'
    );

    return redirect()->route('submenus.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Submenu $submenu)
  {
    return view('backend.managemenu.submenus.show', [
      'title' => 'Detail data submenu',
      'submenu' => $submenu
    ]);
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

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Submenu::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
