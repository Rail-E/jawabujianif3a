<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pinjaman</title>
</head>
<body>
    <h1>Edit Pinjaman</h1>
    <form action="{{ route('detail-pinjam.update', $detailPinjam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>ID Anggota:</label>
        <input type="text" name="idanggota" value="{{ $detailPinjam->idanggota }}" required><br>
        <label>ID Buku:</label>
        <input type="text" name="idbuku" value="{{ $detailPinjam->idbuku }}" required><br>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="{{ $detailPinjam->tgl_pinjam }}" required><br>
        <label>Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" value="{{ $detailPinjam->tgl_kembali }}"><br>
        <label>Denda:</label>
        <input type="number" name="denda" value="{{ $detailPinjam->denda }}"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
