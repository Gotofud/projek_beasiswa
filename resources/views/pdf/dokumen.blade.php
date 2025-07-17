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
            margin: 5px;
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
        .badge-proses {
            background-color: gray;
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
        <img src="{{ public_path('user/img/kampus.png') }}" alt="Logo" class="logo">
        <h1 class="report-title">Validasi Dokumen Report</h1>
    </div>

    <table>
        <thead>
            <!-- start row -->
            <tr>
                <th>#</th>
                <th>Kode Seleksi</th>
                <th>Nama Lengkap</th>
                <th>Jalur</th>
                <th>Status</th>
                <th>Reviewer</th>
            </tr>
            <!-- end row -->
        </thead>
        <tbody>
            <!-- start row -->
            @foreach ($dokumen as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->kode_seleksi }}</td>
                    <td>{{ $data->peserta->nama_lengkap }}</td>
                    <td>{{ $data->jalur }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>
                        @if ($data->status == 'diterima')
                            <span class="badge-success">DI TERIMA</span>
                        @elseif($data->status == 'diproses')
                            <span class="badge-proses">DI PROSES</span>
                        @else
                        <span class="badge-fail">DI TOLAK</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            <!-- end row -->
        </tbody>
    </table>
    </table>

    <div class="footer">
        &copy; {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('Y') }} Laskar. All rights reserved.
    </div>
</body>

</html>