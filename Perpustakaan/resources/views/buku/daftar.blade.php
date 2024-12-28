<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $item)
            <tr>
                <td>{{ $item->idbuku }}</td>
                <td>{{ $item->judul_buku }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->pengarang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                    <a href="{{ route('buku.edit', $item->idbuku) }}">Edit</a> |
                    <form action="{{ route('buku.destroy', $item->idbuku) }}" method="POST" style="display:inline;">
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
