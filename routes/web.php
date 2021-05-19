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
// programacion php en funcion de rutas
// funcion anonima
//callback
//funcion dentro de otra
 // definicion de variables
Route::get('variables' , function(){

    $mensaje= 20;
// funcion var_dump:analizar una variable
//muestra tipo de dato y valor
    print_r($mensaje);
    echo "<hr/>";
// php cae ne la categoria devilmente equipados //java es en solo valor

//se sobreescribe las variables
    $mensaje =true;// en php es l unico lenguaje que me deja almacenar diferentes tipos de datos
    var_dump($mensaje);


});
// rutas
Route::get('arreglos', function(){
    // arreglo: estructura de datos
    //=> asocicion
    echo "<pre>";
    $estudiantes= [ "AN"=>"Anna" ,"Ma"=> "Maria","JR"=>"Jorge" ];
    var_dump($estudiantes);
    echo "</pre>";
});
//arreglo multidimensional en php

Route::get("paises",function(){
    $paises=["Colombia"=>[
            "capital"=>"Bogota",
            "moneda"=>"Peso",
            "poblacion"=> 51
    ] ,
    "Peru"=>[
        "capital"=>"Lima",
        "moneda"=>"Sol",
        "poblacion"=> 32.8
    ],
    "Paraguay"=>[
        "capital"=>"Asuncion",
        "moneda"=>"Guarani",
        "poblacion"=> 7.3

    ]
];
//el tipo de datos hay 2 lenguajes , fuertemente equipado:se define el tipo de dato y no cambia
// php, js son lenguajes devilmente equipados no es necesario definir el dato
//en php no existe el problema de definir las variables como entero etc
//concaenar pgar 2 cadenas de caracteres en php es con .
// solo para recorrer arreglos en php foreach




    //Llamar a una vista
    //con los datos
    //levar datos a la vista->
    // alias nombre con el que se reconocen los datos en la vista
    return view("paises")->with("naciones",$paises);






});

Route::get('formulario_buscador', "ParacaidasController@formulario_buscador"); {

}
Route::post('buscar',"ParacaidasController@buscar" );

