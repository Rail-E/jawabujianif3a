<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
</head>
<body>
    <h1>Edit Anggota</h1>
    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $anggota->alamat }}" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="{{ $anggota->jurusan }}" required><br>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="{{ $anggota->tgl_pinjam }}" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
