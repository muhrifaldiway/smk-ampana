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
     Schema::create('ppdb_registrations', function (Blueprint $table) {
         $table->id();
         $table->string('reg_number', 30)->unique();
         $table->string('full_name', 120);
         $table->string('nisn', 10)->nullable()->unique();
         $table->string('birth_place', 80);
         $table->date('birth_date');
         $table->enum('gender', ['L', 'P']);
         $table->text('address');
         $table->string('phone', 20);
         $table->string('email', 150)->nullable();
         $table->string('previous_school', 120);
         $table->foreignId('major_id')->nullable()->constrained()->nullOnDelete();
         $table->string('parent_name', 120);
         $table->string('parent_phone', 20);
         $table->enum('status', ['baru', 'diverifikasi', 'diterima', 'ditolak'])->default('baru');
         $table->text('admin_note')->nullable();
         $table->timestamps();
     });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_registrations');
    }
};
