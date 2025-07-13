<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ptn_dan_prodi')->constrained('universitas')->onDelete('cascade');
            $table->string('kode_seleksi');
            $table->foreignId('peserta_id')->constrained('pesertas')->onDelete('cascade');
            $table->enum('jalur', ['SNBT', 'SNBP']);
            $table->string('kartu_identitas');
            $table->string('rapor');
            // Khusus Snbp
            $table->string('dokumen_prestasi')->nullable();
            $table->enum('status', ['diproses', 'ditolak', 'diterima'])->default('diproses');
            $table->date('tanggal_daftar');
            $table->foreignId('reviewer')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
