<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;

class SuperadminController extends Controller
{
  public function index()
  {
    return view('backend.dashboard.superadmin', [
      'title' => 'Dashboard'
    ]);
  }
}
