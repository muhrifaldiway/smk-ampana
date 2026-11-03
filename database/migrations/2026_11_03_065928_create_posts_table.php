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
     Schema::create('posts', function (Blueprint $table) {
         $table->id();
         $table->enum('type', ['berita', 'pengumuman'])->default('berita');
         $table->string('title', 200);
         $table->string('slug', 220)->unique();
         $table->string('excerpt', 300)->nullable();
         $table->longText('body');
         $table->string('thumbnail')->nullable();
         $table->enum('status', ['draft', 'terbit'])->default('draft');
         $table->timestamp('published_at')->nullable();
         $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
         $table->timestamps();
         $table->index(['status', 'published_at']);
     });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
