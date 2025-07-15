<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Status Seleksi - Laskar Beasiswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 2cm;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
        }

        .section-title {
            background-color: #103551;
            color: white;
            padding: 10px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .info-table td {
            padding: 8px;
            vertical-align: top;
        }

        .result-box {
            text-align: center;
            padding: 20px;
            background-color: #e6ffe6;
            border: 2px dashed #28a745;
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }
        .result-box-fail {
            text-align: center;
            padding: 20px;
            background-color: #FF8989;
            border: 2px dashed #FF0202;
            font-size: 18px;
            font-weight: bold;
            color: #FF0202;
        }

        .logo {
            width: 80px;
            margin: 5px;
            margin-bottom: 5px;
        }

        .label {
            font-weight: bold;
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('user/img/logo-color.png') }}" alt="Logo" class="logo">
        <img src="{{ public_path('user/img/kampus.png') }}" alt="Logo" class="logo">
        <p>Hasil Seleksi Calon Mahasiswa</p>
    </div>

    <div class="section-title">Informasi Peserta</div>
    <table class="info-table">
        <tr>
            <td class="label">Kode Seleksi</td>
            <td>: {{ $pendaftaran->kode_seleksi }}</td>
        </tr>
        <tr>
            <td class="label">Nama Peserta</td>
            <td>: {{ $pendaftaran->peserta->nama_lengkap }}</td>
        </tr>
        <tr>
            <td class="label">Universitas</td>
            <td>: {{ $pendaftaran->ptn->nama }}</td>
        </tr>
        <tr>
            <td class="label">Program Studi</td>
            <td>: {{ $pendaftaran->ptn->prodi->nama }}</td>
        </tr>
    </table>

    <div class="section-title">Hasil Seleksi</div>
    <table class="info-table">
        <tr>
            <td class="label">Jalur Ujian/Seleksi</td>
            <td>: {{ $pendaftaran->jalur }}</td>
        </tr>
        <tr>
            <td class="label">Nilai Total</td>
            <td>: {{ $pendaftaran->seleksi->nilai_total }}</td>
        </tr>
    </table>
    @if ($pendaftaran->seleksi->status_kelulusan == "lulus")
    <div class="result-box">
        SELAMAT! ANDA DINYATAKAN <strong>LULUS</strong><br>
        Selamat kepada calon mahasiswa Indonesia yang lulus melalui seleksi {{ $pendaftaran->jalur }}
    </div>
    @else
    <div class="result-box-fail">
         ANDA DINYATAKAN <strong>TIDAK LULUS</strong><br>
         Jangan putus asa dan tetap semangat untuk kesempatan berikutnya
    </div>
    @endif
</body>

</html>