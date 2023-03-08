<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'judul' => 'Belajar Web Bootstrap',
                'penulis' => 'Fahri',
                'tgl_terbit' => '2004-06-02'
            ],
            [
                'judul' => 'Belajar php',
                'penulis' => 'Denis',
                'tgl_terbit' => '2012-12-12'
            ]
        ]);
    }
}