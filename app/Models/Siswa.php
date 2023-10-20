<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Siswa extends Model

{
    use HasFactory;
    protected $table ="siswa";
    protected $guarded = [];
    protected $primaryKey = "nisn";
    protected $keyType = "string";

    // public function pengaduan(){
    //     return $this->hasMany (Pengaduan::class,'nis');
    // }
}
