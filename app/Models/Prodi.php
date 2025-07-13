<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = ['nama'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class);
    }
}
