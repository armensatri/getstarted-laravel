<?php

namespace App\Http\Controllers\Backend\Account;

use Illuminate\Http\Request;
use App\Models\Manageuser\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
  public function index()
  {
    $user = User::find(Auth::id());

    return view('backend.account.changepassword.index', [
      'title' => 'Change password',
      'user' => $user
    ]);
  }
}
