<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('anggota', function (Blueprint $table) {
        $table->id('idanggota');
        $table->string('nama_anggota');
        $table->text('alamat');
        $table->string('jurusan');
        $table->date('tgl_pinjam');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
