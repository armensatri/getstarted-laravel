<?php

namespace App\Models\xcatatan;

use App\Traits\Searchable;
use App\Traits\HasRandomUrl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SearchableDiModel extends Model
{
  use HasFactory, Searchable, HasRandomUrl;

  protected array $sFields = [
    // field utama model
    'name',
    'username'
  ];

  protected array $sRelations = [
    // jika (1) field di dalam relasi
    'role' => 'name',

    // jika (banyak) field di dalam relasi
    'profile' => [
      'bio',
      'location'
    ]
  ];
}
