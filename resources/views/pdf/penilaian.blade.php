<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reviewer Report</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
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
            margin-bottom: 5px;
        }

        .report-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

         .badge-success {
            background-color: green;
            color: #fff;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 4px;
            display: inline-block;
            font-size: 11px;
            text-align: center;
        }
         .badge-fail {
            background-color: red;
            color: #fff;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 4px;
            display: inline-block;
            font-size: 11px;
            text-align: center;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 11px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('user/img/logo-color.png') }}" alt="Logo" class="logo">
        <h1 class="report-title">Hasil Penilaian Report</h1>
    </div>

    <table>
        <thead>
            <!-- start row -->
            <tr>
                <th>#</th>
                <th>Kode Seleksi</th>
                <th>Nama Lengkap</th>
                <th>Jalur</th>
                <th>Nilai Ujian</th>
                <th>Universitas</th>
                <th>Program Studi</th>
                <th>Status</th>
            </tr>
            <!-- end row -->
        </thead>
        <tbody>
            <!-- start row -->
            @foreach ($hasil as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->pendaftaran->kode_seleksi }}</td>
                <td>{{ $data->pendaftaran->peserta->nama_lengkap }}</td>
                <td>{{ $data->pendaftaran->jalur}}</td>
                <td>{{ $data->nilai_total }}</td>
                <td>{{ $data->pendaftaran->ptn->nama }}</td>
                <td>{{ $data->pendaftaran->ptn->prodi->nama }}</td>
                <td>
                    @if ($data->status_kelulusan === 'lulus')
                        <span class="badge-success">LULUS</span>
                    @else
                    <span class="badge-fail">TIDAK LULUS</span>
                    @endiF
                </td>
            </tr>


            @endforeach
            <!-- end row -->
        </tbody>
    </table>

    <div class="footer">
        &copy; {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('Y') }} Laskar. All rights reserved.
    </div>
</body>

</html>