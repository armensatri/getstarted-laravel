<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;

class OwnerController extends Controller
{
  public function index()
  {
    return view('backend.dashboard.owner', [
      'title' => 'Dashboard'
    ]);
  }
}
