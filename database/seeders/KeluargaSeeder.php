<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama' => 'Jack',
                'nama_ayah' => 'Joko',
                'telp_ayah' => '081238761236',
                'nama_ibu' => 'Indah',
                'telp_ibu' => '081289345278'
            ],
            [
                'nama' => 'Naila',
                'nama_ayah' => 'Toni',
                'telp_ayah' => '081278005644',
                'nama_ibu' => 'Jeni',
                'telp_ibu' => '081288869877'
            ],
            [
                'nama' => 'Joni',
                'nama_ayah' => 'Asep',
                'telp_ayah' => '081212378899',
                'nama_ibu' => 'Siti',
                'telp_ibu' => '081212342121'
            ]
        ]);
    }
}
