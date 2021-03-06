<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\HomeController;
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


Route::name('web')->group(function(){

		//Home
		Route::get('/', [HomeController::class, 'index']);
		Route::get('/search', [HomeController::class, 'search']);
		Route::get('/searchcidade', [HomeController::class, 'searchcidade']);

		//Categorias
		Route::resource('categoria', CategoriasController::class);
		Route::get('categoria/{categoria}/{empresa}', [CategoriasController::class, 'showsingle']);

		//Empresas
		Route::resource('empresas', EmpresasController::class);



	
});