<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pinjaman</title>
</head>
<body>
    <h1>Tambah Pinjaman</h1>
    <form action="{{ route('detail-pinjam.store') }}" method="POST">
        @csrf
        <label>ID Anggota:</label>
        <input type="text" name="idanggota" required><br>
        <label>ID Buku:</label>
        <input type="text" name="idbuku" required><br>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" required><br>
        <label>Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali"><br>
        <label>Denda:</label>
        <input type="number" name="denda"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
