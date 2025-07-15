<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Biodata Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 40px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .logo {
            width: 80px;
            margin: 5px;
            margin-bottom: 5px;
        }

        .report-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        .biodata-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .biodata-table td {
            padding: 6px 10px;
            vertical-align: top;
        }

        .biodata-table td.label {
            width: 30%;
            font-weight: bold;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 11px;
            color: #777;
        }

        .section {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('user/img/logo-color.png') }}" alt="Logo" class="logo">
        <img src="{{ public_path('user/img/kampus.png') }}" alt="Logo" class="logo">
        <h1 class="report-title">Biodata Peserta</h1>
    </div>

    <table class="biodata-table">
        <tr>
            <td class="label">Nama</td>
            <td>: {{ $peserta->nama_lengkap }}</td>
        </tr>
        <tr>
            <td class="label">Jenis Kelamin</td>
            <td>: {{ $peserta->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td class="label">NISN</td>
            <td>: {{ $peserta->nisn }}</td>
        </tr>
        <tr>
            <td class="label">NIK</td>
            <td>: {{ $peserta->nik }}</td>
        </tr>
        <tr>
            <td class="label">No HP</td>
            <td>: {{ $peserta->no_hp }}</td>
        </tr>
        <tr>
            <td class="label">Tempat Lahir</td>
            <td>: {{ $peserta->tempat_lahir }}</td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir</td>
            <td>: {{ \Carbon\Carbon::parse($peserta->tanggal_lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td>: {{ $peserta->alamat }}</td>
        </tr>
        <tr>
            <td class="label">Nama Sekolah</td>
            <td>: {{ $peserta->nama_sekolah }}</td>
        </tr>
        <tr>
            <td class="label">NPSN</td>
            <td>: {{ $peserta->npsn }}</td>
        </tr>
        <tr>
            <td class="label">Tahun Lulus</td>
            <td>: {{ $peserta->tahun_lulus }}</td>
        </tr>
    </table>

    <div class="footer">
        &copy; {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('Y') }} Laskar. All rights reserved.
    </div>
</body>

</html>
