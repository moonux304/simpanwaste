<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('saldo_transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->foreignId('id_pengguna')->constrained('pengguna', 'id_pengguna')->onDelete('cascade');
            $table->foreignId('id_penimbangan')->nullable()->constrained('penimbangan', 'id_penimbangan')->onDelete('set null');
            $table->enum('jenis', ['setoran', 'penarikan']);
            $table->decimal('jumlah', 12, 2);
            $table->dateTime('tanggal');
            $table->decimal('saldo', 12, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saldo_transaksi');
    }
};