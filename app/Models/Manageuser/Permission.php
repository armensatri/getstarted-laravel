<?php

namespace App\Models\Manageuser;

use App\Models\Manageuser\Role;
use App\Traits\Models\HasRandomUrl;
use App\Traits\Models\HasSluggable;
use App\Traits\Models\HasSearchable;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  use HasRandomUrl, HasSearchable, HasSluggable;

  protected $table = 'permissions';

  protected $fillable = [
    'name',
    'slug',
    'guard_name',
    'url'
  ];

  protected $sFields = [
    'name',
  ];

  public function getRouteKeyName()
  {
    return 'url';
  }

  public function roles()
  {
    return $this->belongsToMany(
      Role::class,
      'role_has_permission',
      'role_id',
      'permission_id'
    );
  }
}
