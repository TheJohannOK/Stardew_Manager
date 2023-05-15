<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return "Contactame";
})->name('contacto');
/* ->name es un nombre que se le da a una ruta para que no tengamos que hacerlo de forma relativa */


Route::get('/custom', function() {

    $msj2 = "Mensaje desde el servidor *-*";

    /*
    Este ejemplo: 2º Parametro, envia para parametros a la vista custom, el nombre para utilizar en la vista es msj
    return view('custom', ['msj' => $msj2, 'edad' => 15 ]);
    */

    $data = ['msj' => $msj2, 'edad' => 15 ];

    //Envia un array de valores de $data
    return view('custom', $data);
});