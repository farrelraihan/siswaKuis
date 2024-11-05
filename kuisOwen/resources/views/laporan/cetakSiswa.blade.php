<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Siswa</title>
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
    <h2>Laporan Siswa</h2>
    <table>
        <thead>
            <tr>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->NIS }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>