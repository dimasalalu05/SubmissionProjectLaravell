<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>matakuliah</title>


</head>

<body>
    <h1>Tambah Data Matakuliah</h1>

    <form action="{{ route('matakuliah.store') }}" method="POST">

        @csrf

        <div>
            <label for="">Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah" id="">

            @error('kode_matakuliah')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">Nama Matakuliah</label>
            <input type="text" name="nama_matakuliah" id="">

            @error('nama_matakuliah')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">SKS</label>
            <input type="number" min="1" max="6" name="sks" id="">

            @error('sks')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('matakuliah.index') }}"></a>
    </form>
</body>

</html>
