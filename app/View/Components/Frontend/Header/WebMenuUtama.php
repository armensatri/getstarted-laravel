<?php

namespace App\View\Components\Frontend\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebMenuUtama extends Component
{
  public $route;
  public $img;
  public $alt;
  public $menu;
  public $description;
  public $buttonName;

  public function __construct(
    $route,
    $img,
    $alt,
    $menu,
    $description,
    $buttonName,
  ) {
    $this->route = $route;
    $this->img = $img;
    $this->alt = $alt;
    $this->menu = $menu;
    $this->description = $description;
    $this->buttonName = $buttonName;
  }

  public function render(): View|Closure|string
  {
    return view('components.frontend.header.web-menu-utama');
  }
}
