<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailSetoran extends Model
{
    protected $table = 'detail_setoran';
    protected $primaryKey = 'id_detail';

    protected $fillable = [
        'id_laporan',
        'id_kategori',
        'berat_aktual',
        'kondisi',
        'subtotal',
    ];

    public function laporanSetoran()
    {
        return $this->belongsTo(LaporanSetoran::class, 'id_laporan', 'id_laporan');
    }

    public function kategoriSampah()
    {
        return $this->belongsTo(KategoriSampah::class, 'id_kategori', 'id_kategori');
    }
}