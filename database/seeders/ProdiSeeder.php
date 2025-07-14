<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodi;
use App\Models\Universitas;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        $prodi = [
            'Kedokteran',
            'Ilmu Komputer',
            'Teknik Informatika',
            'Psikologi',
            'Teknik Elektro',
            'Teknik Sipil',
            'Farmasi',
            'Kedokteran Hewan',
            'Hukum',
            'Manajemen',
            'Ilmu Komunikasi',
            'Statistika dan Sains Data',
            'Agronomi dan Hortikultura',
            'Administrasi Bisnis',
            'Teknologi Informasi',
            'Ilmu Kelautan',
            'Kesehatan Masyarakat',
            'Biologi',
            'Pendidikan Bahasa Inggris',
            'Pendidikan Teknik Informatika',
            'Pendidikan Matematika',
            'Ilmu Administrasi Negara',
            'Pendidikan Dokter',
            'Pendidikan Bahasa Jepang',
            'Pendidikan Guru Sekolah Dasar',
            'Ilmu Hukum',
            'Agroteknologi',
            'Teknik Pertanian',
            'Akuntansi',
            'Teknik Geofisika',
            'Teknik Kimia',
            'Sastra Inggris',
            'Agribisnis',
            'Pendidikan Guru',
            'Akutansi',
            'Sistem Informasi',
            'Perikanan',
            'Kehutanan',
            'Pendidikan Fisika',
            'Pendidikan Jasmani'
        ];

        foreach ($prodi as $namaProdi) {
            Prodi::create(['nama' => $namaProdi]);
        }

    }
}
