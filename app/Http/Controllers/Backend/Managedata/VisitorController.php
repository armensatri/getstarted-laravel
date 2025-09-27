<?php

namespace App\Http\Controllers\Backend\Managedata;

use Illuminate\Http\Request;
use App\Models\Manageuser\User;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
  public function index()
  {
    $users = User::query()
      ->search(request(['search', 'role']))
      ->select([
        'id',
        'image',
        'name',
        'email',
        'role_id',
        'url'
      ])
      ->with(['role:id,name,bg,text'])
      ->orderby('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managedata.visitor.index', [
      'title' => 'Visitor',
      'users' => $users
    ]);
  }

  public function online()
  {
    return view('backend.managedata.visitor.online', [
      'title' => 'Visitor online'
    ]);
  }

  public function banned()
  {
    return view('backend.managedata.visitor.banned', [
      'title' => 'Visitor banned'
    ]);
  }

  public function offline()
  {
    return view('backend.managedata.visitor.offline', [
      'title' => 'Visitor offline'
    ]);
  }

  public function device()
  {
    return view('backend.managedata.visitor.device', [
      'title' => 'Visitor device'
    ]);
  }
}
