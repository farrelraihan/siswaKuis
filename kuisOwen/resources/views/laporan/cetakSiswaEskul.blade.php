<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Siswa Ekstrakurikuler</title>
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
    <h2>Laporan Siswa Ekstrakurikuler</h2>
    <table>
        <thead>
            <tr>
                <th>ID Siswa Eskul</th>
                <th>ID Siswa</th>
                <th>ID Eskul</th>
                <th>Tanggal Daftar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $siswaEskul)
                <tr>
                    <td>{{ $siswaEskul->id }}</td>
                    <td>{{ $siswaEskul->siswa_id }}</td>
                    <td>{{ $siswaEskul->eskul_id }}</td>
                    <td>{{ $siswaEskul->tanggal_daftar }}</td>
                    <td>{{ $siswaEskul->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>