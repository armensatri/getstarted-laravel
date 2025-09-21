<?php

namespace App\Enums;

class NavigationIcon
{
  public static function get(string $name): ?string
  {
    $icons = [
      'home' => 'Home.png'
    ];

    $key = strtolower(trim($name));
    $fileName = $icons[$key] ?? null;

    return $fileName ? "frontend/img/navigation/{$fileName}" : null;
  }
}
