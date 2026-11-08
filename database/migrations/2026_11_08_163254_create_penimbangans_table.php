<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penimbangan', function (Blueprint $table) {
            $table->id('id_penimbangan');
            $table->foreignId('id_laporan')->unique()->constrained('laporan_setoran', 'id_laporan')->onDelete('cascade');
            $table->foreignId('id_petugas')->constrained('pengguna', 'id_pengguna')->onDelete('cascade');
            $table->dateTime('tanggal_timbang');
            $table->decimal('total_berat', 8, 2);
            $table->decimal('total_nilai', 12, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penimbangan');
    }
};