<?php

namespace Database\Seeders\Managemenu;

use App\Models\Managemenu\Navigation;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
  public function run(): void
  {
    $navigations = [
      [
        'sn' => 1,
        'name' => 'home',
        'slug' => 'home',
        'route' => '/',
        'button_name' => 'home',
        'description' => "welcome back 'explore' belajar terstruktur dan gratis"
      ],
    ];

    foreach ($navigations as $navigation) {
      Navigation::create($navigation);
    }
  }
}
