<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeccionController;

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

/*
Route::get('/', HomeController::class () {
    return view('una nueva ruta, hurray!');
});
*/

/*
Route::get('miruta/{seccion}/{categoria?}', function($seccion, $categoria=null){
    if ($categoria)
        return "esta es mi nueva ruta: sección: $seccion y categoría: $categoria";
    else
        return "esta es mi nueva ruta: $seccion";		
});
*/

Route::get("/", HomeController::class);
Route::get("/home", [SeccionController::class, 'index']);
Route::get("/seccion/nuevo", [SeccionController::class, 'create']);
Route::get("/seccion/{seccion}/{subseccion?}", [SeccionController::class, 'show']);
//Ejemplo: /seccion/deportes/(Aquí es opcional)