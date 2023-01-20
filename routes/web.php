<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\SearchPageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DBController;

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
Route::get("/", function(){
    return "una nueva ruta, hurray!";
});
*/

Route::get('miruta/{seccion}/{categoria?}', function($seccion, $categoria=null){
    if ($categoria)
        return "esta es mi nueva ruta: sección: $seccion y categoría: $categoria";
    else
        return "esta es mi nueva ruta: $seccion";		
});


//Route::get("/", HomeController::class);
/*
Route::get("/", [HomeController::class, 'index']);
Route::get("/usuario", [SeccionController::class, 'usuario']);
Route::get("/home", [SeccionController::class, 'index']);
Route::get("/seccion/nuevo", [SeccionController::class, 'create']);
//Route::get("/seccion/{seccion}/{subseccion?}", [SeccionController::class, 'show']);
//Ejemplo: /seccion/deportes/(Aquí es opcional)
Route::get("blog/{seccion}/{subseccion?}", function ($seccion, $subseccion = null) {
    if($subseccion)
        return "esta es la subseccion $subseccion de la seccion $seccion del blog";
    else
        return "esta es la seccion $seccion del blog";
});

Route::get("/{seccion}", function ($seccion) {
    
        return "esta es la seccion $seccion del blog";
});
*/


Route::get("/", [MainPageController::class, 'inicio']);

Route::get("/home", HomeController::class);

Route::get("/home/{usuario}", [DBController::class,'DBdata'])->name('usuarioespecifico');


Route::get("/searchpage/{nomviaje?}", function ($nomviaje = null){
    if($nomviaje)
        return "Este es el viaje $nomviaje";
    else
        return view('traveliens/searchpage');     
});


Route::get("/account/{nomcuenta?}", [AccountController::class, 'account']);

Route::get("/test", function(){
    return view('traveliens/test');
});

Route::get('{noexiste?}', function ($noexiste) {
    if($noexiste)
    return view('traveliens.404');
});

