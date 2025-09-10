<?php

namespace App\Models\Published;

use App\Traits\Models\HasSluggable;
use App\Traits\Models\HasRandomUrl;
use App\Traits\Models\HasSearchable;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  use HasRandomUrl, HasSearchable, HasSluggable;

  protected $table = 'statuses';

  protected $fillable = [
    'ss',
    'name',
    'slug',
    'bg',
    'text',
    'description',
    'url'
  ];

  protected $sFields = [
    'name',
  ];

  public function getRouteKeyName()
  {
    return 'url';
  }
}
