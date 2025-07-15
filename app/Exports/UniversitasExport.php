<?php

namespace App\Exports;

use App\Models\Universitas;
use Maatwebsite\Excel\Concerns\FromCollection;

class UniversitasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Universitas::all();
    }
}
