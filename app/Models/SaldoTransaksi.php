<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaldoTransaksi extends Model
{
    protected $table = 'saldo_transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_pengguna',
        'id_penimbangan',
        'jenis',
        'jumlah',
        'tanggal',
        'saldo',
    ];

    protected $casts = [
        'tanggal' => 'datetime',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }

    public function penimbangan()
    {
        return $this->belongsTo(Penimbangan::class, 'id_penimbangan', 'id_penimbangan');
    }
}