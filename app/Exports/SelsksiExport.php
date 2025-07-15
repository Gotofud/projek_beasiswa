<?php

namespace App\Exports;

use App\Models\Seleksi;
use Maatwebsite\Excel\Concerns\FromCollection;

class SelsksiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Seleksi::all();
    }
}
