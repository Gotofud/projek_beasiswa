<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Peserta;
use App\Models\User;

class Pendaftaran extends Model
{
    protected $fillable = [
        'kode_seleksi',
        'ptn_dan_prodi',
        'peserta_id',
        'jalur',
        'kartu_identitas',
        'rapor',
        'dokumen_prestasi',
        'status',
        'tanggal_daftar',
        'reviewer',
    ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'peserta_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'reviewer');
    }

    public function ptn()
    {
        return $this->belongsTo(Universitas::class, 'ptn_dan_prodi');
    }
}
