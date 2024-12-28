<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Detail Pinjam</title>
</head>
<body>
    <h1>Daftar Detail Pinjam</h1>
    <a href="{{ route('detail-pinjam.create') }}">Tambah Pinjaman</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID Anggota</th>
                <th>ID Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detailPinjam as $item)
            <tr>
                <td>{{ $item->idanggota }}</td>
                <td>{{ $item->idbuku }}</td>
                <td>{{ $item->tgl_pinjam }}</td>
                <td>{{ $item->tgl_kembali }}</td>
                <td>{{ $item->denda }}</td>
                <td>
                    <a href="{{ route('detail-pinjam.edit', $item->id) }}">Edit</a> |
                    <form action="{{ route('detail-pinjam.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
