<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanSetoran extends Model
{
    protected $table = 'laporan_setoran';
    protected $primaryKey = 'id_laporan';

    protected $fillable = [
        'id_pengguna',
        'id_bank_sampah',
        'metode',
        'latitude',
        'longitude',
        'status',
        'tanggal_lapor',
        'estimasi_berat',
    ];

    protected $casts = [
        'tanggal_lapor' => 'datetime',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }

    public function bankSampah()
    {
        return $this->belongsTo(BankSampah::class, 'id_bank_sampah', 'id_bank_sampah');
    }

    public function detailSetoran()
    {
        return $this->hasMany(DetailSetoran::class, 'id_laporan', 'id_laporan');
    }

    public function penimbangan()
    {
        return $this->hasOne(Penimbangan::class, 'id_laporan', 'id_laporan');
    }
}