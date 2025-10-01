<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class UserStatus
{
  public function handle(Request $request, Closure $next): Response
  {
    $user = Auth::user();

    if ($user && $user->status === 0) {
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      Alert::warning(
        'Oops..',
        'Akun anda! di banned.'
      );

      return redirect()->route('login');
    }

    return $next($request);
  }
}
