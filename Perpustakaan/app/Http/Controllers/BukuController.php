<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $buku = Buku::all();
        return response()->json($buku);
    }

    // Menambahkan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
        ]);

        $buku = Buku::create($request->all());
        return response()->json($buku, 201);
    }

    // Menampilkan detail buku berdasarkan ID
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return response()->json($buku);
    }

    // Memperbarui data buku
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return response()->json($buku);
    }

    // Menghapus buku
    public function destroy($id)
    {
        Buku::destroy($id);
        return response()->json(['message' => 'Buku deleted successfully']);
    }
}
