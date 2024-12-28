<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    use HasFactory;

    protected $table = 'detail_pinjam';

    protected $fillable = [
        'idanggota',
        'idbuku',
        'tgl_pinjam',
        'tgl_kembali',
        'denda',
    ];

    // Relasi ke model Anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'idanggota');
    }

    // Relasi ke model Buku
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'idbuku');
    }
}
