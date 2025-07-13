<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsi = [
            ['id' => 11, 'provinsi' => 'ACEH'],
            ['id' => 12, 'provinsi' => 'SUMATERA UTARA'],
            ['id' => 13, 'provinsi' => 'SUMATERA BARAT'],
            ['id' => 14, 'provinsi' => 'RIAU'],
            ['id' => 15, 'provinsi' => 'JAMBI'],
            ['id' => 16, 'provinsi' => 'SUMATERA SELATAN'],
            ['id' => 17, 'provinsi' => 'BENGKULU'],
            ['id' => 18, 'provinsi' => 'LAMPUNG'],
            ['id' => 19, 'provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['id' => 21, 'provinsi' => 'KEPULAUAN RIAU'],
            ['id' => 31, 'provinsi' => 'DKI JAKARTA'],
            ['id' => 32, 'provinsi' => 'JAWA BARAT'],
            ['id' => 33, 'provinsi' => 'JAWA TENGAH'],
            ['id' => 34, 'provinsi' => 'DI YOGYAKARTA'],
            ['id' => 35, 'provinsi' => 'JAWA TIMUR'],
            ['id' => 36, 'provinsi' => 'BANTEN'],
            ['id' => 51, 'provinsi' => 'BALI'],
            ['id' => 52, 'provinsi' => 'NUSA TENGGARA BARAT'],
            ['id' => 53, 'provinsi' => 'NUSA TENGGARA TIMUR'],
            ['id' => 61, 'provinsi' => 'KALIMANTAN BARAT'],
            ['id' => 62, 'provinsi' => 'KALIMANTAN TENGAH'],
            ['id' => 63, 'provinsi' => 'KALIMANTAN SELATAN'],
            ['id' => 64, 'provinsi' => 'KALIMANTAN TIMUR'],
            ['id' => 65, 'provinsi' => 'KALIMANTAN UTARA'],
            ['id' => 71, 'provinsi' => 'SULAWESI UTARA'],
            ['id' => 72, 'provinsi' => 'SULAWESI TENGAH'],
            ['id' => 73, 'provinsi' => 'SULAWESI SELATAN'],
            ['id' => 74, 'provinsi' => 'SULAWESI TENGGARA'],
            ['id' => 75, 'provinsi' => 'GORONTALO'],
            ['id' => 76, 'provinsi' => 'SULAWESI BARAT'],
            ['id' => 81, 'provinsi' => 'MALUKU'],
            ['id' => 82, 'provinsi' => 'MALUKU UTARA'],
            ['id' => 91, 'provinsi' => 'PAPUA BARAT'],
            ['id' => 94, 'provinsi' => 'PAPUA'],
        ];

        foreach ($provinsi as $datas) {
            Provinsi::create($datas);
        }
    }
}
