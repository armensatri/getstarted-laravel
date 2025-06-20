<?php

namespace App\Http\Controllers\Backend\Published;

use App\Helpers\RandomUrl;
use Illuminate\Http\Request;
use App\Models\Published\Status;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Published\Status\StatusSr;
use App\Http\Requests\Published\Status\StatusUr;
use Cviebrock\EloquentSluggable\Services\SlugService;

class StatusesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $statuses = Status::query()
      ->search(request(['search']))
      ->select(['id', 'ss', 'name', 'bg', 'text', 'description', 'url'])
      ->orderBy('ss', 'asc')
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

    $datastore['url'] = $request->input('url')
      ?: RandomUrl::GenerateUrl();

    Status::create($datastore);

    Alert::success(
      'success',
      'Data status! berhasil di tambahkan.'
    );

    return redirect()->route('statuses.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Status $status)
  {
    return view('backend.published.statuses.show', [
      'title' => 'Detail data status',
      'status' => $status
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Status $status)
  {
    return view('backend.published.statuses.edit', [
      'title' => 'Edit data status',
      'status' => $status
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StatusUr $request, Status $status)
  {
    $dataupdate = $request->validated();

    if (
      $request->name != $status->name ||
      $request->slug != $status->slug
    ) {
      $rules = [
        'name' => 'unique:statuses,name,' . $status->id,
        'slug' => 'unique:statuses,slug,' . $status->id,
      ];

      $messages = [
        'name.unique' => 'Status..name! sudah terdaptar',
        'slug.unique' => 'Status..slug! sudah terdaptar'
      ];

      $request->validate($rules, $messages);
    }

    $status->update($dataupdate);

    Alert::success(
      'success',
      'Data status! berhasil di update.'
    );

    return redirect()->route('statuses.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Status $status)
  {
    Status::destroy($status->id);

    Alert::success(
      'success',
      'Data status! berhasil di delete.'
    );

    return redirect()->route('statuses.index');
  }

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Status::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
