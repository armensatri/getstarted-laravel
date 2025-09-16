<?php

namespace App\Http\Controllers\Backend\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalPublicController extends Controller
{
  public function index()
  {
    return view('backend.account.personal_public.personal_public', [
      'title' => 'personal public'
    ]);
  }
}
