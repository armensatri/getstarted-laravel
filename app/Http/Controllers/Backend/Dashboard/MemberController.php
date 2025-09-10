<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
  public function index()
  {
    return view('backend.dashboard.member', [
      'title' => 'Dashboard'
    ]);
  }
}
