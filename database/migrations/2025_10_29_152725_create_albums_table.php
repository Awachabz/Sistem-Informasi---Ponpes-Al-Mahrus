<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('caption')->nullable();
            $table->string('media')->nullable(); // foto/video
            $table->enum('media_type', ['image', 'video', 'none'])->default('none');

            // ➕ Tambahkan kolom privasi
            $table->enum('privacy', ['public', 'private'])->default('public');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
