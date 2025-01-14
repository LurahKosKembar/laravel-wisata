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
        Schema::create('request_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata', 100)->nullable(false);
            $table->string('lokasi_wisata', 100)->nullable(false);;
            $table->string('nama_pengaju', 100)->nullable(false);;
            $table->text('deskripsi')->nullable(false);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_wisatas');
    }
};
