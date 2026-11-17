<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Matakuliah</h1>

    <form action="{{ route('matakuliah.store') }}">

        @csrf
        <div>
            <label for="">Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah" id="">

            @error('kode_matakuliah')
                <p style="color: red">{{ $message() }}</p>
            @enderror
        </div>

        <div>
            <label for="">Kode Matakuliah</label>
            <input type="text" name="nama_matakuliah" id="">

            @error('nama_matakuliah')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah" id="">

            @error('kode_matakuliah')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">SKS</label>
            <input type="text" name="SKS" id="">

            @error('sks')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

    </form>
</body>

</html>
