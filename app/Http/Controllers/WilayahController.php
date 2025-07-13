<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class WilayahController extends Controller
{
    public function getKota($id_provinsi)
    {
        $kota = Kota::where('id_provinsi', $id_provinsi)->get();
        return response()->json($kota);
    }
}
