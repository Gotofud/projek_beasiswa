<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;

class Kota extends Model
{
    protected $fillable = ['id_provinsi','kota'];
    public $timestamps = true;


    public function provinsi()
    {
    	return $this->BelongsTo(Provinsi::class,'id_provinsi');
    }
}
