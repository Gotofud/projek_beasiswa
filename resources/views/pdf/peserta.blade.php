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

        .badge-role {
            background-color: #13deb9;
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
        <h1 class="report-title">Peserta Report</h1>
    </div>

    <table>
        <thead>
            <!-- start row -->
            <tr>
                <th>#</th>
                <th>Nama </th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            <!-- end row -->
        </thead>
        <tbody>
            <!-- start row -->
            @foreach ($peserta as $data)
                <tr>
                    @if ($data->user)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->user->email }}</td>
                        <td>
                            <span class="badge bg-primary text-white">Peserta</span>
                        </td>
                    @endif
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