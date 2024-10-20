<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa_model;
use Illuminate\Http\Request;

class mahasiswa_controler extends Controller
{
    public function index (){
        $mahasiswa=mahasiswa_model::get_mahasiswa();
        return view('mahasiswa', ['data'=>$mahasiswa]);
    }
}
