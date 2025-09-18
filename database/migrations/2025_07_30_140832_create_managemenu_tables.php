<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('menus', function (Blueprint $table) {
      $table->id();
      $table->string('sm');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->text('description');
      $table->string('url', 7)->unique();
      $table->timestamps();
    });

    Schema::create('submenus', function (Blueprint $table) {
      $table->id();
      $table->foreignId('menu_id')
        ->constrained('menus')
        ->cascadeOnDelete()
        ->cascadeOnUpdate();
      $table->string('ssm');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('route');
      $table->string('active');
      $table->string('routename');
      $table->text('description');
      $table->string('url', 7)->unique();
      $table->timestamps();
    });

    Schema::create('explores', function (Blueprint $table) {
      $table->id();
      $table->string('se');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('route')->nullable();
      $table->string('button_name');
      $table->text('description');
      $table->string('url', 7)->unique();
      $table->timestamps();
    });

    Schema::create('navigations', function (Blueprint $table) {
      $table->id();
      $table->string('sn');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('route')->nullable();
      $table->string('button_name');
      $table->text('description');
      $table->string('url', 7)->unique();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('menus');
    Schema::dropIfExists('submenus');
    Schema::dropIfExists('explores');
    Schema::dropIfExists('navigations');
  }
};
