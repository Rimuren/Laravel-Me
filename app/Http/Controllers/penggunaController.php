<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use App\Models\book;

class penggunaController extends Controller
{
    public function get(){
        $pengguna=pengguna::get();
        $books=book::get_all();
        $data['datauser']=$pengguna;
        $data['databuku']=$books;
        return view('pengguna',['data'=>$pengguna]);
    }
    public function insert(Request $request){
        $pengguna=pengguna::insert($request);
        echo    $pengguna;

        // $pengguna = new pengguna;
        // $pengguna->nama = $request->nama;
        // $pengguna->email = $request->email;
        // $pengguna->save();
        // echo $pengguna;
    }
}
