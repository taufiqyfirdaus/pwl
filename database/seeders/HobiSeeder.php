<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'nama' => 'Jack',
                'nama_hobi' => 'Memancing',
            ],
            [
                'nama' => 'Naila',
                'nama_hobi' => 'Memasak',
            ],
            [
                'nama' => 'Joni',
                'nama_hobi' => 'Programming',
            ]
        ]);
    }
}
