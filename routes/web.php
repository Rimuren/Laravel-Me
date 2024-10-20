<?php

use App\Http\Controllers\MeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa_controler;
use App\Http\Controllers\ongkirController;
use App\Http\Controllers\penggunaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/see',function(){
    return view('me');
});
Route::get('/mahasiswa',function(){
    return view('mahasiswa');
});
Route::get('/pengguna',[penggunaController::class,'get']);
Route::post('/pengguna',[penggunaController::class,'insert']);

Route::get('/provinsi',[ongkirController::class,'listProvinsi']);
Route::get('/provinsi/{id}',[ongkirController::class,'getProvinsi']);
Route::get('/kota',[ongkirController::class,'listCity']);
Route::get('/kota/{id}',[ongkirController::class,'getCity']);
Route::get('/cost/{origin}/{destination}/{weight}/{courier}',[ongkirController::class,'getCost']);

// Route::get('/gendeng/{nim}',[MeController :: class,'index']);
Route::get('/mahasiswa',[mahasiswa_controler::class,'index']);