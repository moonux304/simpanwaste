<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriSampah extends Model
{
    protected $table = 'kategori_sampah';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
        'harga_per_kg',
        'deskripsi',
    ];

    public function detailSetoran()
    {
        return $this->hasMany(DetailSetoran::class, 'id_kategori', 'id_kategori');
    }
}