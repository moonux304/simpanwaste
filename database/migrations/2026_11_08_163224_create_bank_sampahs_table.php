<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bank_sampah', function (Blueprint $table) {
            $table->id('id_bank_sampah');
            $table->string('nama');
            $table->text('alamat');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('jam_operasional');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bank_sampah');
    }
};