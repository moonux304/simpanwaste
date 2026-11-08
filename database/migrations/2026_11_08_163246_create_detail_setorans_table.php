<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_setoran', function (Blueprint $table) {
            $table->id('id_detail');
            $table->foreignId('id_laporan')->constrained('laporan_setoran', 'id_laporan')->onDelete('cascade');
            $table->foreignId('id_kategori')->constrained('kategori_sampah', 'id_kategori')->onDelete('cascade');
            $table->decimal('berat_aktual', 8, 2)->nullable();
            $table->enum('kondisi', ['bersih', 'kotor'])->default('bersih');
            $table->decimal('subtotal', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_setoran');
    }
};