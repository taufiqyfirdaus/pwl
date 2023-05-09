<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    // protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'nim', 
        'nama', 
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp'
    ];
    protected $guarded = ['id'];
    public function kelas(){
        return $this->belongsTo(KelasModel::class);
    }
    public function matakuliah()
    {
        return $this->belongsToMany(MataKuliahModel::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
}
