<?php

use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PruebaController;
use Illuminate\Http\Request;
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

Route::view('/vista-directa','vista',['nombre' => 'Freddy']);

Route::get('nueva',function (Request $request) {

    return "Hello world".$request->get ('variable');
});

Route::get('/controladores',[PruebaController::class, 'mostrar'])->name('blog');

Route::get('/parametros/{id}',[PruebaController::class, 'parametros']);

Route::get('/blog/{slug}/{id}',[PruebaController::class, 'blog']);


Route::get('products',[PruebaController::class, 'mostrarProducts'])->middleware('product_token');

Route::get('sin-token',[PruebaController::class, 'sinToken'])->name('sin_token');

Route::get('categories',[CategoryController::class, 'index']);

//Para de un solo turcaso se hagan las rutas de todas las funciones de esta clase
Route::resource('categories',CategoryController::class);
//Para ver como van, las rutas es con el comendo php artisan route:list
//Lo mismo para las apis


