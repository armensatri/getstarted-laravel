<?php

namespace App\Http\Controllers\Backend\Managemenu;

use App\Helpers\RandomUrl;
use Illuminate\Http\Request;
use App\Models\Managemenu\Menu;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Http\Requests\Managemenu\Menu\{
  MenuSr,
  MenuUr,
};
use RealRashid\SweetAlert\Facades\Alert;

class MenusController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $menus = Menu::query()
      ->search(request(['search']))
      ->select([
        'id',
        'sm',
        'name',
        'description',
        'url'
      ])
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managemenu.menus.index', [
      'title' => 'Semua data menus',
      'menus' => $menus
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.managemenu.menus.create', [
      'title' => 'Create data menu'
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(MenuSr $request)
  {
    $datastore = $request->validated();

    $datastore['url'] = RandomUrl::generateUrl();

    Menu::create($datastore);

    Alert::success(
      'success',
      'Data menu! berhasil di tambahkan.'
    );

    return redirect()->route('menus.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Menu $menu)
  {
    return view('backend.managemenu.menus.show', [
      'title' => 'Detail data menu',
      'menu' => $menu
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Menu $menu)
  {
    return view('backend.managemenu.menus.edit', [
      'title' => 'Edit data menu',
      'menu' => $menu
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(MenuUr $request, Menu $menu)
  {
    // ini lagi ya
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Menu $menu)
  {
    //
  }

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Menu::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
