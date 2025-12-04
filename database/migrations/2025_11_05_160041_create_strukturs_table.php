<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('structure_members', function (Blueprint $table) {
            $table->id();
            $table->string('division'); // Nama divisi
            $table->string('name')->nullable(); // Nama pengurus
            $table->string('photo')->nullable(); // Foto profil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('structure_members');
    }
};
