<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>
    <a href="{{ route('anggota.create') }}">Tambah Anggota</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Tanggal Pinjam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggota as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_anggota }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->tgl_pinjam }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $item->id) }}">Edit</a> |
                    <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display:inline;">
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
