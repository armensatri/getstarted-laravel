<?php

namespace App\Http\Controllers\Backend\Account;

use Illuminate\Http\Request;
use App\Models\Manageuser\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Account\Profile\ProfileUr;

class ProfileController extends Controller
{
  public function index()
  {
    $user = Auth::user();

    return view('backend.account.profile.index', [
      'title' => 'My profile',
      'user' => $user
    ]);
  }

  public function edit()
  {
    $user = Auth::user();

    return view('backend.account.profile.edit', [
      'title' => 'Profile edit',
      'user' => $user
    ]);
  }

  public function update(ProfileUr $request, User $user)
  {
    //
  }
}
