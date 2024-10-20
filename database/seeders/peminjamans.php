<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peminjamans extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjamans')->insert([
            [
            'book_id' => 1,
            'pengguna_id' => 1,
            'tgl_peminjaman' => now(),
            ],
            [
            'book_id' => 2,
            'pengguna_id' => 1,
            'tgl_peminjaman' => now(),
            ],
            [
            'book_id' => 3,
            'pengguna_id' => 2,
            'tgl_peminjaman' => now(),
            ],
            [
            'book_id' => 4,
            'pengguna_id' => 2,
            'tgl_peminjaman' => now(),
            ],
            [
            'book_id' => 5,
            'pengguna_id' => 1,
            'tgl_peminjaman' => now(),
            ],
    ]);

    }
}
