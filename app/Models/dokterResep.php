<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokterResep extends Model
{
    use HasFactory;
    protected $fillable = ['nama_obat','jumlah','harga','id_resep'];
}
