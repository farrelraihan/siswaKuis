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
        Schema::create('siswa_eskuls', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('siswa_id');
            $table->string('eskul_id');
            $table->string('tanggal_daftar');
            $table->string('status');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('eskul_id')->references('id')->on('eskuls');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_eskuls');
    }
};
