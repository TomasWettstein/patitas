<?php

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
/*Rutas Generales*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/crearAlerta', 'App\Http\Controllers\AppController@mostrarCrearAlerta');
Route::get('/formAlerta', 'App\Http\Controllers\AppController@mostrarFormAlerta');
Route::post('/formAlerta', 'App\Http\Controllers\AppController@crearAlerta');
Route::get('/nosotros', 'App\Http\Controllers\AppController@nosotros');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
