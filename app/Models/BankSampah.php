<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankSampah extends Model
{
    protected $table = 'bank_sampah';
    protected $primaryKey = 'id_bank_sampah';

    protected $fillable = [
        'nama',
        'alamat',
        'latitude',
        'longitude',
        'jam_operasional',
    ];

    public function laporanSetoran()
    {
        return $this->hasMany(LaporanSetoran::class, 'id_bank_sampah', 'id_bank_sampah');
    }
}