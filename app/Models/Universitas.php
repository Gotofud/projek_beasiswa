<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Prodi;

class Universitas extends Model
{
    protected $fillable = [
        'nama',
        'kota_id',
        'provinsi_id',
        'prodi_id',
        'kode_prodi',
        'minimal_nilai_utbk',
        'minimal_nilai_snbp'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }

    public function ptn()
    {
        return $this->hasOne(Universitas::class);
    }

     public function provinsi()
    {
    	return $this->BelongsTo(Provinsi::class,'provinsi_id');
    }
     public function kota()
    {
    	return $this->BelongsTo(Kota::class,'kota_id');
    }
}
