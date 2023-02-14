<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SearchPageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DBController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\TravelpageController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Auth\RegistereduserController;

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


Route::get('miruta/{seccion}/{categoria?}', function($seccion, $categoria=null){
    if ($categoria)
        return "esta es mi nueva ruta: sección: $seccion y categoría: $categoria";
    else
        return "esta es mi nueva ruta: $seccion";		
});
*/

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
Route::get('/login', function(){
    return 'Login page';
})->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [RegistereduserController::class, 'store']);

Route::get("/", [MainPageController::class, 'inicio'])->name('mainpage');

Route::get("/home", HomeController::class)->name('home');
//Route::get("/home", "App\Http\Controllers\HomeController")->name('home'); No es una buena prática

Route::get("/searchpage", [SearchPageController::class, 'index'])->name('searchpage');

Route::get("/searchpage/{nomviaje?}", [SearchPageController::class, 'show'])->name('searchpage');

Route::get("/help", HelpController::class)->name('help');

Route::get('/travelpage', TravelpageController::class)->name('travelpage');

Route::get("/account", [AccountController::class, 'show'])->name('account');

Route::get("/account/{user}", [DBController::class, 'show'])->name('dbuser');

Route::get("/account/{user}/update", [AccountController::class, 'update'])->name('account.update');

Route::patch("/account/{user}", [AccountController::class, 'edit' ])->name('account.edit');

Route::delete("/account/{user}", [AccountController::class, 'delete'])->name('account.delete');

Route::resource("CreateAccount", FormController::class);
/*
Route::get("/CreateAccount", [FormController::class, 'create'])->name('form');

Route::post("/CreateAccount" , [FormController::class, 'save'])->name('form.save');

Route::get("/searchuser/{name}", [DBuserresult::class, 'show'])->name('dbuser');
*/

Route::get("/backend", BackendController::class)->name('backend')->middleware('auth');

Route::get('{noexiste?}', function ($noexiste) {
    if($noexiste)
    return view('traveliens.404');
});




