<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
        [
            'nama_buku' => 'Cari Masalah',
            'pengarang_buku' => 'Alkadafi',
        ],
        [
            'nama_buku' => 'Cari Duit',
            'pengarang_buku' => 'Celvin',
        ],
        [
            'nama_buku' => 'Cara Mencari Iwak',
            'pengarang_buku' => 'Rendi Rendang',
        ],
        [
            'nama_buku' => 'Cara Pinjam Buku',
            'pengarang_buku' => 'Wahyu'
        ],
        [
            'nama_buku' => 'How To Basic',
            'pengarang_buku' => 'Helmi',
        ],
        ]);
    }
}
