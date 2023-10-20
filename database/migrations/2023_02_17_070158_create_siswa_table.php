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
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nisn');
            $table->integer('nis');
            $table->string('nama');
            $table->string('kelas');
            $table->text('alamat');
            $table->string('kontak',13);
            $table->string('tl',40);
            $table->date('tgl');
            $table->enum('jk',['L','P']);
            $table->enum('status',['A','TA']);
            $table->text('foto');
            $table->string ('password');
            $table->primary('nisn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
