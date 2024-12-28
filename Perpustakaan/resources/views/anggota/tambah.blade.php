<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    <h1>Tambah Anggota</h1>
    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama_anggota" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
