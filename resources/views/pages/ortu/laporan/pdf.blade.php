<!DOCTYPE html>
<html>
<head>
    <title>Laporan PDF</title>
    <style>
        /* Add any custom styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Hasil Belajar {{ $laporan->siswa->nama }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Judul Laporan</th>
                <th>Nilai Sikap</th>
                <th>Nilai Keterampilan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $laporan->judul }}</td>
                <td>{{ $laporan->nilai_sikap }}</td>
                <td>{{ $laporan->nilai_keterampilan }}</td>
                <td>{{ $laporan->keterangan }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
