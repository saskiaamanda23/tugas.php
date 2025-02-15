<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Kembalikan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('test');
    }
};
