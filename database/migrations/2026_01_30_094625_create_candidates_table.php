<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
  /**
   * Running the migrations
   */
  public function up(): void
  {
    Schema::create('candidates', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('role');
      $table->string('specialty');
      $table->timestamps();
    });
  }

  /**
   * Reversing the migrations
   */
  public function down(): void
  {
    Schema::dropIfExists('candidates');
  }
};