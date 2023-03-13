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
                'judul' => 'Belajar Web ReactJS',
                'penulis' => 'Whyna',
                'tgl_terbit' => '2004-06-02'
            ],
            [
                'judul' => 'Belajar Laravel',
                'penulis' => 'Sandi',
                'tgl_terbit' => '2004-06-02'
            ],
            [
                'judul' => 'Belajar Database',
                'penulis' => 'Heri',
                'tgl_terbit' => '2004-06-02'
            ]
        ]);
    }
}