<?php

namespace App\Http\Controllers;

use App\Models\DetailPinjam;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    // Menampilkan semua detail pinjaman
    public function index()
    {
        $detailPinjam = DetailPinjam::with(['anggota', 'buku'])->get();
        return response()->json($detailPinjam);
    }

    // Menambahkan detail pinjaman baru
    public function store(Request $request)
    {
        $request->validate([
            'idanggota' => 'required|exists:anggota,idanggota',
            'idbuku' => 'required|exists:buku,idbuku',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
            'denda' => 'required|integer|min:0',
        ]);

        $detailPinjam = DetailPinjam::create($request->all());
        return response()->json($detailPinjam, 201);
    }

    // Menampilkan detail pinjaman berdasarkan ID
    public function show($id)
    {
        $detailPinjam = DetailPinjam::with(['anggota', 'buku'])->findOrFail($id);
        return response()->json($detailPinjam);
    }

    // Memperbarui detail pinjaman
    public function update(Request $request, $id)
    {
        $detailPinjam = DetailPinjam::findOrFail($id);
        $detailPinjam->update($request->all());
        return response()->json($detailPinjam);
    }

    // Menghapus detail pinjaman
    public function destroy($id)
    {
        DetailPinjam::destroy($id);
        return response()->json(['message' => 'DetailPinjam deleted successfully']);
    }
}
