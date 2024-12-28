<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Menampilkan semua anggota
    public function index()
    {
        $anggota = Anggota::all();
        return response()->json($anggota);
    }

    // Menambahkan anggota baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jurusan' => 'required|string|max:100',
            'tgl_pinjam' => 'required|date',
        ]);

        $anggota = Anggota::create($request->all());
        return response()->json($anggota, 201);
    }

    // Menampilkan detail anggota berdasarkan ID
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return response()->json($anggota);
    }

    // Memperbarui data anggota
    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());
        return response()->json($anggota);
    }

    // Menghapus anggota
    public function destroy($id)
    {
        Anggota::destroy($id);
        return response()->json(['message' => 'Anggota deleted successfully']);
    }
}
