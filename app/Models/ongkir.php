<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ongkir extends Model
{
    use HasFactory;
    public static function getProvinsi($id){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API',false)
        ])->get('https://api.rajaongkir.com/starter/province',[
            'id' => $id
        ]);
        return [
            'Province' =>$response ['rajaongkir']['results']['province']
        ];
    }
    public static function listProvinsi(){
        $response = Http::withHeaders([ 
            'key' => env('RAJAONGKIR_API',false)
        ])->get('https://api.rajaongkir.com/starter/province');
        return $response;
    }

    public static function getCity($id){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API',false)
        ])->get('https://api.rajaongkir.com/starter/city',[
        'id' => $id
    ]); 
        return $response;
    }
    public static function listCity(){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API',false)
        ])->get('https://api.rajaongkir.com/starter/city');
        return $response;
    }
    public static function getCost($origin,$destination,$weight,$courier){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API',false)
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => $origin,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier,
        ]);
        return [
            'Origin' => $response['rajaongkir']['origin_details']['city_name'],
            'Destination' => $response['rajaongkir']['destination_details']['city_name'],
            'Results' => $response['rajaongkir']['results'],
        ];
    }
}
