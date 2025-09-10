<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  public function index()
  {
    return view('backend.dashboard.admin', [
      'title' => 'Dashboard'
    ]);
  }
}
