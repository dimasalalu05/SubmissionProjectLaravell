<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="6">
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Detail</th>
        </tr>

        @forelse ($matakuliahs as $mk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mk->kode_matakuliah }}</td>
                <td>{{ $mk->nama_matakuliah }}</td>
                <td>{{ $mk->sks }}</td>
                <td> <a href="{{ route('matakuliah.show', $mk) }}">detail</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
