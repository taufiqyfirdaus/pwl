<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'nama_matkul' => 'Pemrograman Web Lanjut',
                'nama_dosen' => 'Moch. Zawaruddinn Abdullah, S.ST., M.Kom',
                'prodi' => 'D4-TI',
                'jurusan' => 'Teknologi Informasi'
            ],
            [
                'nama_matkul' => 'Statistik Komputasi',
                'nama_dosen' => 'Elok Nur Hamdana, S.T., M.T',
                'prodi' => 'D4-TI',
                'jurusan' => 'Teknologi Informasi'
            ],
            [
                'nama_matkul' => 'Proyek',
                'nama_dosen' => 'Rudy Ariyanto, ST.,M.Cs.',
                'prodi' => 'D4-TI',
                'jurusan' => 'Teknologi Informasi'
            ]
        ]);
    }
}
