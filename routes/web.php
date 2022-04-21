<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//primera ruta
Route::get('hola' , function(){ 
    echo "Hola 2465903";
});

//Ruta de arreglos:
Route::get('arreglo' , function(){
    $estudiantes =[ 
        "CA" => 1, 
        "JO" => true,
        "AN" =>1.78
    ];
    
    //recorrer el arreglo
    foreach($estudiantes as $e){
        echo $e."<hr />";
    }

    //agregar elemento en PHP
    $estudiantes[] = "Johan";
    var_dump($estudiantes);
});

Route::get('paises', function(){
    //arreglo paises
    $paises = [
        "Colombia" => [
            "capital" => "Bogotá",
            "moneda" => "Peso",
            "población" => 51,
            "ciudades" => [
                "Medellín",
                "Cali",
                "Barranquilla"
            ]
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "población" => 32,
            "ciudades" => [
                "Arequipa",
                "Cusco"
            ]
        ],
        "Paraguay" => [
            "capital" => "Asunción",
            "moneda" => "Guaraní paraguayo",
            "población" => 7,
            "ciudades" => [
                "Luque"
            ]
        ],
        "Francia" => [
            "capital" => "Paris",
            "moneda" => "Euro",
            "población" => 67
        ],
        "Argentina" => [
            "capital" => "Buenos Aires",
            "moneda" => "Peso Argentino",
            "población" => 45

        ]
    ];

    //

    return view('paises')
        ->with("paises", $paises);

});