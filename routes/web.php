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



Route::view('/', 'home');
//Route::get('/', function () {
//    return view('home');
//})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/portafolio', 'portafolio')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
