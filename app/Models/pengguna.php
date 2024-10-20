<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pengguna extends Model
{
    use HasFactory;
    public static function get_all(){
        $users = DB::table('penggunas')->get();
        return $users;
    }

    public static function insert(Request $request){
        $insert = DB::table('penggunas')->insert([
            ['nama' => $request->nama, 'email' => $request->email],
        ]);
        return $insert;
    }
}