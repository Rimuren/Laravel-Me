<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perpustakaan')->insert(
            [
            'id' => 1,
            'nama' => 'org 1',
            'pengarang' => 'Pengarang 1',
            'penerbit' => 'Penerbit 1',
            ]
    );
    }
}
