<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universitas;

class UniversitasSeeder extends Seeder
{
    public function run(): void
    {
        $universitas = [
            ['nama' => 'Universitas Indonesia', 'prodi_id' => 1, 'kode_prodi' => 'UI-01', 'minimal_nilai_utbk' => 740, 'minimal_nilai_snbp' => 89, 'kota_id' => 184, 'provinsi_id' => 32], // KOTA DEPOK, JAWA BARAT
            ['nama' => 'Universitas Indonesia', 'prodi_id' => 2, 'kode_prodi' => 'UI-02', 'minimal_nilai_utbk' => 710, 'minimal_nilai_snbp' => 87, 'kota_id' => 184, 'provinsi_id' => 32],
            ['nama' => 'Universitas Gadjah Mada', 'prodi_id' => 3, 'kode_prodi' => 'UGM-03', 'minimal_nilai_utbk' => 720, 'minimal_nilai_snbp' => 88, 'kota_id' => 227, 'provinsi_id' => 34], // KOTA YOGYAKARTA
            ['nama' => 'Universitas Gadjah Mada', 'prodi_id' => 4, 'kode_prodi' => 'UGM-04', 'minimal_nilai_utbk' => 705, 'minimal_nilai_snbp' => 86, 'kota_id' => 227, 'provinsi_id' => 34],
            ['nama' => 'Institut Teknologi Bandung', 'prodi_id' => 5, 'kode_prodi' => 'ITB-05', 'minimal_nilai_utbk' => 730, 'minimal_nilai_snbp' => 88, 'kota_id' => 181, 'provinsi_id' => 32], // KOTA BANDUNG
            ['nama' => 'Institut Teknologi Bandung', 'prodi_id' => 6, 'kode_prodi' => 'ITB-06', 'minimal_nilai_utbk' => 725, 'minimal_nilai_snbp' => 87, 'kota_id' => 181, 'provinsi_id' => 32],
            ['nama' => 'Universitas Airlangga', 'prodi_id' => 7, 'kode_prodi' => 'UNAIR-07', 'minimal_nilai_utbk' => 710, 'minimal_nilai_snbp' => 86, 'kota_id' => 264, 'provinsi_id' => 35], // KOTA SURABAYA
            ['nama' => 'Universitas Airlangga', 'prodi_id' => 8, 'kode_prodi' => 'UNAIR-08', 'minimal_nilai_utbk' => 675, 'minimal_nilai_snbp' => 84, 'kota_id' => 264, 'provinsi_id' => 35],
            ['nama' => 'Universitas Diponegoro', 'prodi_id' => 9, 'kode_prodi' => 'UNDIP-09', 'minimal_nilai_utbk' => 700, 'minimal_nilai_snbp' => 85, 'kota_id' => 220, 'provinsi_id' => 33], // KOTA SEMARANG
            ['nama' => 'Universitas Diponegoro', 'prodi_id' => 10, 'kode_prodi' => 'UNDIP-10', 'minimal_nilai_utbk' => 685, 'minimal_nilai_snbp' => 83, 'kota_id' => 220, 'provinsi_id' => 33],
            ['nama' => 'Universitas Padjadjaran', 'prodi_id' => 11, 'kode_prodi' => 'UNPAD-11', 'minimal_nilai_utbk' => 695, 'minimal_nilai_snbp' => 84, 'kota_id' => 175, 'provinsi_id' => 32], // KAB. KARAWANG
            ['nama' => 'Universitas Padjadjaran', 'prodi_id' => 12, 'kode_prodi' => 'UNPAD-12', 'minimal_nilai_utbk' => 675, 'minimal_nilai_snbp' => 82, 'kota_id' => 175, 'provinsi_id' => 32],
            ['nama' => 'Institut Pertanian Bogor', 'prodi_id' => 13, 'kode_prodi' => 'IPB-13', 'minimal_nilai_utbk' => 710, 'minimal_nilai_snbp' => 85, 'kota_id' => 179, 'provinsi_id' => 32], // KOTA BOGOR
            ['nama' => 'Institut Pertanian Bogor', 'prodi_id' => 14, 'kode_prodi' => 'IPB-14', 'minimal_nilai_utbk' => 670, 'minimal_nilai_snbp' => 81, 'kota_id' => 179, 'provinsi_id' => 32],
            ['nama' => 'Universitas Brawijaya', 'prodi_id' => 15, 'kode_prodi' => 'UB-15', 'minimal_nilai_utbk' => 705, 'minimal_nilai_snbp' => 85, 'kota_id' => 259, 'provinsi_id' => 35], // KOTA MALANG
            ['nama' => 'Universitas Brawijaya', 'prodi_id' => 16, 'kode_prodi' => 'UB-16', 'minimal_nilai_utbk' => 690, 'minimal_nilai_snbp' => 84, 'kota_id' => 259, 'provinsi_id' => 35],
            ['nama' => 'Universitas Hasanuddin', 'prodi_id' => 17, 'kode_prodi' => 'UNHAS-17', 'minimal_nilai_utbk' => 670, 'minimal_nilai_snbp' => 82, 'kota_id' => 286, 'provinsi_id' => 73], // KOTA MAKASSAR
            ['nama' => 'Universitas Hasanuddin', 'prodi_id' => 18, 'kode_prodi' => 'UNHAS-18', 'minimal_nilai_utbk' => 665, 'minimal_nilai_snbp' => 80, 'kota_id' => 286, 'provinsi_id' => 73],
            ['nama' => 'Universitas Andalas', 'prodi_id' => 19, 'kode_prodi' => 'UNAND-19', 'minimal_nilai_utbk' => 665, 'minimal_nilai_snbp' => 81, 'kota_id' => 69, 'provinsi_id' => 13], // KOTA PADANG
            ['nama' => 'Universitas Andalas', 'prodi_id' => 20, 'kode_prodi' => 'UNAND-20', 'minimal_nilai_utbk' => 650, 'minimal_nilai_snbp' => 79, 'kota_id' => 69, 'provinsi_id' => 13],
            ['nama' => 'Universitas Sumatera Utara', 'prodi_id' => 21, 'kode_prodi' => 'USU-21', 'minimal_nilai_utbk' => 660, 'minimal_nilai_snbp' => 80, 'kota_id' => 53, 'provinsi_id' => 12], // KOTA MEDAN
            ['nama' => 'Universitas Sumatera Utara', 'prodi_id' => 22, 'kode_prodi' => 'USU-22', 'minimal_nilai_utbk' => 665, 'minimal_nilai_snbp' => 81, 'kota_id' => 53, 'provinsi_id' => 12],
            ['nama' => 'Universitas Negeri Yogyakarta', 'prodi_id' => 23, 'kode_prodi' => 'UNY-23', 'minimal_nilai_utbk' => 655, 'minimal_nilai_snbp' => 80, 'kota_id' => 226, 'provinsi_id' => 34], // KAB. SLEMAN
            ['nama' => 'Universitas Negeri Yogyakarta', 'prodi_id' => 24, 'kode_prodi' => 'UNY-24', 'minimal_nilai_utbk' => 645, 'minimal_nilai_snbp' => 79, 'kota_id' => 226, 'provinsi_id' => 34],
            ['nama' => 'Universitas Negeri Malang', 'prodi_id' => 25, 'kode_prodi' => 'UM-25', 'minimal_nilai_utbk' => 650, 'minimal_nilai_snbp' => 80, 'kota_id' => 259, 'provinsi_id' => 35],
            ['nama' => 'Universitas Negeri Malang', 'prodi_id' => 26, 'kode_prodi' => 'UM-26', 'minimal_nilai_utbk' => 660, 'minimal_nilai_snbp' => 81, 'kota_id' => 259, 'provinsi_id' => 35],
            ['nama' => 'Universitas Sebelas Maret', 'prodi_id' => 27, 'kode_prodi' => 'UNS-27', 'minimal_nilai_utbk' => 660, 'minimal_nilai_snbp' => 82, 'kota_id' => 218, 'provinsi_id' => 33], // KOTA SURAKARTA
            ['nama' => 'Universitas Sebelas Maret', 'prodi_id' => 28, 'kode_prodi' => 'UNS-28', 'minimal_nilai_utbk' => 720, 'minimal_nilai_snbp' => 87, 'kota_id' => 218, 'provinsi_id' => 33],
            ['nama' => 'Universitas Pendidikan Indonesia', 'prodi_id' => 29, 'kode_prodi' => 'UPI-29', 'minimal_nilai_utbk' => 630, 'minimal_nilai_snbp' => 78, 'kota_id' => 181, 'provinsi_id' => 32],
            ['nama' => 'Universitas Pendidikan Indonesia', 'prodi_id' => 30, 'kode_prodi' => 'UPI-30', 'minimal_nilai_utbk' => 650, 'minimal_nilai_snbp' => 80, 'kota_id' => 181, 'provinsi_id' => 32],
            ['nama' => 'Universitas Negeri Semarang', 'prodi_id' => 31, 'kode_prodi' => 'UNNES-31', 'minimal_nilai_utbk' => 640, 'minimal_nilai_snbp' => 79, 'kota_id' => 220, 'provinsi_id' => 33],
            ['nama' => 'Universitas Negeri Semarang', 'prodi_id' => 32, 'kode_prodi' => 'UNNES-32', 'minimal_nilai_utbk' => 655, 'minimal_nilai_snbp' => 81, 'kota_id' => 220, 'provinsi_id' => 33],
            ['nama' => 'Universitas Jember', 'prodi_id' => 33, 'kode_prodi' => 'UNEJ-33', 'minimal_nilai_utbk' => 635, 'minimal_nilai_snbp' => 78, 'kota_id' => 236, 'provinsi_id' => 35], // KAB. JEMBER
            ['nama' => 'Universitas Jember', 'prodi_id' => 34, 'kode_prodi' => 'UNEJ-34', 'minimal_nilai_utbk' => 625, 'minimal_nilai_snbp' => 77, 'kota_id' => 236, 'provinsi_id' => 35],
            ['nama' => 'Universitas Lampung', 'prodi_id' => 35, 'kode_prodi' => 'UNILA-35', 'minimal_nilai_utbk' => 640, 'minimal_nilai_snbp' => 79, 'kota_id' => 139, 'provinsi_id' => 18], // KOTA BANDAR LAMPUNG
            ['nama' => 'Universitas Lampung', 'prodi_id' => 36, 'kode_prodi' => 'UNILA-36', 'minimal_nilai_utbk' => 620, 'minimal_nilai_snbp' => 76, 'kota_id' => 139, 'provinsi_id' => 18]
        ];

        foreach ($universitas as $dataUniversitas) {
            Universitas::create($dataUniversitas);
        }
    }
}