<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Ekstrakurikuler</title>
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
    <h2>Laporan Ekstrakurikuler</h2>
    <table>
        <thead>
            <tr>
                <th>ID Eskul</th>
                <th>Nama Eskul</th>
                <th>Pembina</th>
                <th>Jadwal</th>
                <th>Ruangan</th>
                <th>Kuota</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $eskul)
                <tr>
                    <td>{{ $eskul->id }}</td>
                    <td>{{ $eskul->nama_eskul }}</td>
                    <td>{{ $eskul->pembina }}</td>
                    <td>{{ $eskul->jadwal }}</td>
                    <td>{{ $eskul->ruangan }}</td>
                    <td>{{ $eskul->kuota }}</td>
                    <td>{{ $eskul->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>