<?php

namespace App\Enums;

class ExploreIcon
{
  public static function get(string $name): ?string
  {
    $icons = [
      'app laravel' => 'app-laravel.pngg',
      'app tailwind' => 'app-tailwind.pngg'
    ];

    $key = strtolower(trim($name));
    $fileName = $icons[$key] ?? null;

    return $fileName ? "frontend/img/explore/{$fileName}" : null;
  }
}
