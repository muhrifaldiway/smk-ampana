<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up(): void
 {
     Schema::create('majors', function (Blueprint $table) {
         $table->id();
         $table->string('name', 120);
         $table->string('slug', 140)->unique();
         $table->string('short_name', 20)->nullable();
         $table->text('description')->nullable();
         $table->string('icon', 60)->nullable();
         $table->string('image')->nullable();
         $table->unsignedSmallInteger('sort_order')->default(0);
         $table->boolean('is_active')->default(true);
         $table->timestamps();
     });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
