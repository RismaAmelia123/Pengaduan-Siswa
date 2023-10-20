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
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->increments('id_tanggapan');
            $table->unsignedInteger('id_pengaduan');
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->unsignedInteger('id_petugas');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
