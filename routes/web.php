<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MotoController;

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


//Ruta para probar la conexión de la base de datos
Route::get(
    '/testDB',
    [\App\Http\Controllers\TestController::class, 'testDB']
);


//Ruta para mapear el controlador y todos sus métodos
Route::resource(
    name: 'motos', 
    controller: \App\Http\Controllers\MotoController::class
);

