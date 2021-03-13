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


#====================================
#   Rutas con nombres
#   contactame, es la url
#   contactos, es el nombre de la ruta
#------------------------------------
Route::get('contactame', function () {
    return 'seccion de contactos';
})->name('contactos');

Route::get('/', function () {
    echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 5</a><br>";
});

