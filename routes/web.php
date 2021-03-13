<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| son las url de entradas de la aplicacion.
*/



# Peticion Get y la funcion tambien conocida como closure
# definimos la Url y respondemos con una funcion
Route::get('/', function () {
    return 'hola desde la pagina de inicio';
});

#------------------------------------
# Saludos con parametro No obligatorio u opcionales
Route::get('/saludo/{nombre?}',function($nombre = 'Invitado'){
    return 'Saludos ' . $nombre;
});

