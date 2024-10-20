<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class penggunas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penggunas')->insert([
            [
                'nama' => 'helmi',
                'email' => 'helmi@gmail.com',
            ],
            [
                'nama' =>'celvin',
                'email'=>'celvin@gmail.com',
            ],
        ]);

    }
}
