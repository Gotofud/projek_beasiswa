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
        Schema::create('universitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kota_id')->constrained('kotas')->onDelete('cascade');
            $table->foreignId('provinsi_id')->constrained('kotas')->onDelete('cascade');
            $table->foreignId('prodi_id')->constrained('prodis')->onDelete('cascade');
            $table->string('kode_prodi')->unique();
            $table->string('minimal_nilai_utbk');
            $table->string('minimal_nilai_snbp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universitas');
    }
};
