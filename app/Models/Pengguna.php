<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';

    protected $fillable = [
        'nama',
        'username',
        'no_hp',
        'alamat',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public function laporanSetoran()
    {
        return $this->hasMany(LaporanSetoran::class, 'id_pengguna', 'id_pengguna');
    }

    public function penimbanganPetugas()
    {
        return $this->hasMany(Penimbangan::class, 'id_petugas', 'id_pengguna');
    }

    public function saldoTransaksi()
    {
        return $this->hasMany(SaldoTransaksi::class, 'id_pengguna', 'id_pengguna');
    }
}