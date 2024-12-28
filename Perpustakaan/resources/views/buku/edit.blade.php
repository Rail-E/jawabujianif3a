<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="{{ route('buku.update', $buku->idbuku) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul Buku:</label>
        <input type="text" name="judul_buku" value="{{ $buku->judul_buku }}" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required><br>
        <label>Pengarang:</label>
        <input type="text" name="pengarang" value="{{ $buku->pengarang }}" required><br>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" value="{{ $buku->jumlah }}" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
