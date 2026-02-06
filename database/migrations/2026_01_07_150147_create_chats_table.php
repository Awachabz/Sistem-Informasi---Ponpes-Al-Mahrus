<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();

            // ❗ JANGAN DIUBAH
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->text('message')->nullable();
            $table->string('sticker')->nullable();

            // status baca (opsional)
            $table->timestamp('read_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
