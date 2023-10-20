<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    protected $guarded =[];
    protected $primaryKey = "id_kategori";
}
