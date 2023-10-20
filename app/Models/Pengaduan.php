<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = "pengaduan";
    protected $guarded = [];
    protected $primaryKey = "id_pengaduan";
    protected $dates = ['tgl_pengaduan'];

    function siswa(){
        return $this->belongsTo(Siswa::class,'nisn');
    }

    // function kategori(){
    //     return $this->belongsTo(Kategori::class,'id_kategori');
    // }

    public function kategori(): BelongsToMany{
        return $this->belongsToMany(Kategori::class,'pengaduan', 'id_pengaduan', 'id_kategori');
    }

    function tanggapan(){
        return $this->hasOne(Tanggapan::class,'id_tanggapan');
    }
}
