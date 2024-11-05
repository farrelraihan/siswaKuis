<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kegiatan Ekstrakurikuler Aktif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h2>Laporan Kegiatan Ekstrakurikuler Aktif</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Ekstrakurikuler</th>
                <th>Kuota</th>
                <th>Jumlah Siswa Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->nama_eskul }}</td>
                    <td>{{ $item->kuota }}</td>
                    <td>{{ $item->jumlah_siswa_aktif }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>