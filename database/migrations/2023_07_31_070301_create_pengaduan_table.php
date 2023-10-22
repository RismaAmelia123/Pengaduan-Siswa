<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id_pengaduan');
            $table->unsignedInteger('id_kategori');
            $table->string('nisn');
            $table->date('tgl_pengaduan');
            $table->date('tgl_kejadian');
            $table->text('isi_laporan');
            $table->string('foto');
            $table->enum('status',['0','proses','selesai']);
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('nisn')->references('nisn')->on('siswa')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
