<?php

namespace App\Http\Controllers;
use App\Models\ongkir;
use Illuminate\Http\Request;


class ongkirController extends Controller
{
    public function listProvinsi(){
        $result=ongkir::listProvinsi();
        return $result;
    }
    public function getProvinsi($id){
        $result=ongkir::getProvinsi($id);
        return $result;
    }
    public function listCity(){
        $result=ongkir::listCity();
        return $result;
    }
    public function getCity($id){
        $result=ongkir::getCity($id);
        return $result;
    }
    public function getCost($origin,$destination,$weight,$courier){
        $result=ongkir::getCost($origin,$destination,$weight,$courier);
        return $result;
    }
}
