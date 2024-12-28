<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul Buku:</label>
        <input type="text" name="judul_buku" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" required><br>
        <label>Pengarang:</label>
        <input type="text" name="pengarang" required><br>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
