<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'keluarga';
    protected $primaryKey = 'id_keluarga';
    protected $fillable = [
        'nama',
        'nama_ayah',
        'telp_ayah',
        'nama_ibu',
        'telp_ibu',
    ];
}
