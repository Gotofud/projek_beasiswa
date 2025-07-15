<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Universitas;
use App\Models\User;
use App\Models\Pendaftaran;

class Seleksi extends Model
{
    protected $fillable = [
        'id_pendaftaran',
        'nilai_total',
        'status_kelulusan',
        'tgl_pengumuman',
        'reviewer',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'reviewer');
    }

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }
}
