<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;

class Provinsi extends Model
{
    protected $fillable = ['provinsi'];
    public $timestamps = true;

    public function kota()
    {
        return $this->hasMany(Kota::class);
    }
}
