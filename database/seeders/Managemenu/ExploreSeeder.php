<?php

namespace Database\Seeders\Managemenu;

use Illuminate\Database\Seeder;
use App\Models\Managemenu\Explore;

class ExploreSeeder extends Seeder
{
  public function run(): void
  {
    $explores = [
      [
        'se' => 1,
        'name' => 'App laravel',
        'slug' => 'app-laravel',
        'route' => 'https://laravel.com',
        'button_name' => 'app laravel',
        'description' => 'laravel php framework dengan syntax elegan dan powerfull'
      ],

      [
        'se' => 2,
        'name' => 'App tailwind',
        'slug' => 'app-tailwind',
        'route' => 'https://tailwindcss.com',
        'button_name' => 'app tailwind',
        'description' => 'tailwind utility first css framework cepat fleksibel dan modern'
      ]
    ];

    foreach ($explores as $explore) {
      Explore::create($explore);
    }
  }
}
