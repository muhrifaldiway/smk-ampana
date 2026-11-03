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
     Schema::create('teachers', function (Blueprint $table) {
         $table->id();
         $table->string('name', 120);
         $table->string('nip', 30)->nullable();
         $table->string('position', 100)->nullable();   // jabatan
         $table->string('subject', 100)->nullable();    // mata pelajaran
         $table->string('photo')->nullable();
         $table->foreignId('major_id')->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('teachers');
    }
};
