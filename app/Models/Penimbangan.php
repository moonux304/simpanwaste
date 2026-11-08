<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    protected $table = 'penimbangan';
    protected $primaryKey = 'id_penimbangan';

    protected $fillable = [
        'id_laporan',
        'id_petugas',
        'tanggal_timbang',
        'total_berat',
        'total_nilai',
    ];

    protected $casts = [
        'tanggal_timbang' => 'datetime',
    ];

    public function laporanSetoran()
    {
        return $this->belongsTo(LaporanSetoran::class, 'id_laporan', 'id_laporan');
    }

    public function petugas()
    {
        return $this->belongsTo(Pengguna::class, 'id_petugas', 'id_pengguna');
    }

    public function saldoTransaksi()
    {
        return $this->hasOne(SaldoTransaksi::class, 'id_penimbangan', 'id_penimbangan');
    }
}