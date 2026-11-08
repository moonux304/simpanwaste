<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan_setoran', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->foreignId('id_pengguna')->constrained('pengguna', 'id_pengguna')->onDelete('cascade');
            $table->foreignId('id_bank_sampah')->nullable()->constrained('bank_sampah', 'id_bank_sampah')->onDelete('set null');
            $table->enum('metode', ['pickup', 'drop-off']);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->enum('status', ['menunggu', 'selesai'])->default('menunggu');
            $table->dateTime('tanggal_lapor');
            $table->decimal('estimasi_berat', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_setoran');
    }
};