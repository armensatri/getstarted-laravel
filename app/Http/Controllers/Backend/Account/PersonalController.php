<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
  public function index()
  {
    return view('backend.account.personal.personal', [
      'title' => 'Personal'
    ]);
  }
}
