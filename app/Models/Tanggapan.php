<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = "tanggapan";
    protected $guarded = [];
    protected $primaryKey = "id_tanggapan";

    function pengaduan(){
        return $this->belongsTo(Pengaduan::class,'id_pengaduan');
    }
    function petugas(){
        return $this->belongsTo(petugas::class,'id_petugas');
    }
}
