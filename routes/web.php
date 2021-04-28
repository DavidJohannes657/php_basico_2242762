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
