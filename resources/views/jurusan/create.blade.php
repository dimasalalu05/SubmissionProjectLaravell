<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST">

        @csrf

        <div>
            <label for="">Kode Jurusan</label>
            <input type="text" name="kode" id="" value="{{ old('kode') }}">
            @error('kode')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">Nama Jurusan</label>
            <input type="text" name="nama" id="" value="{{ old('nama') }}">
            @error('nama')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('jurusan.index') }}">Kembali</a>
    </form>
</body>

</html>
