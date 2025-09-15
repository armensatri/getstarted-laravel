<?php

namespace App\Http\Controllers\Backend\Published;

use Illuminate\Http\Request;
use App\Models\Published\Status;
use App\Http\Controllers\Controller;
use App\Traits\Controllers\ValidationUnique;

use App\Http\Requests\Published\Status\{
  StatusSr,
  StatusUr,
};

class StatusesController extends Controller
{
  use ValidationUnique;

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $statuses = Status::query()
      ->search(request(['search']))
      ->select([
        'id',
        'ss',
        'name',
        'bg',
        'text',
        'url',
        'description'
      ])
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.published.statuses.index', [
      'title' => 'Semua data statuses',
      'statuses' => $statuses
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.published.statuses.create', [
      'title' => 'Create data status'
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StatusSr $request)
  {
    $datastore = $request->validated();
  }

  /**
   * Display the specified resource.
   */
  public function show(Status $status)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Status $status)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StatusUr $request, Status $status)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Status $status)
  {
    //
  }
}
