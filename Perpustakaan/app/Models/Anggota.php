<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // Jika nama tabel tidak mengikuti konvensi Laravel
    protected $table = 'anggota';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_anggota',
        'alamat',
        'jurusan',
        'tgl_pinjam',
    ];
}
