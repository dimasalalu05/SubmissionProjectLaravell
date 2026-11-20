<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Detail</h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>Jumlah SKS</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbarui</th>
        </tr>

        <tr>
            <td>{{ $matakuliah->kode_matakuliah }}</td>
            <td>{{ $matakuliah->nama_matakuliah }}</td>
            <td>{{ $matakuliah->sks }}</td>
            <td>{{ $matakuliah->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $matakuliah->updated_at->format('d-m-Y H:i') }}</td>
        </tr>
    </table>
</body>

</html>
