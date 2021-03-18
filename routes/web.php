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

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/menu', '\App\Http\Controllers\CalculadoraController@Menu');

Route::get ('/soma', '\App\Http\Controllers\CalculadoraController@soma')->name('carregarSoma');
Route::post ('/calcular-soma', '\App\Http\Controllers\CalculadoraController@calcularSoma')->name('soma');

Route::get ('/subtrai', '\App\Http\Controllers\CalculadoraController@subtrai')->name('carregarSubtrai');
Route::post ('/calcular-subtrai', '\App\Http\Controllers\CalculadoraController@calcularSubtrai')->name('subtrai');

Route::get ('/divide', '\App\Http\Controllers\CalculadoraController@Divide')->name('carregarDivide');
Route::post ('/calcular-Divide', '\App\Http\Controllers\CalculadoraController@calcularDivide')->name('divide');


Route::get ('/multiplicar', '\App\Http\Controllers\CalculadoraController@multiplicar')->name('carregarMultiplicar');
Route::post ('/calcular-Multiplicar', '\App\Http\Controllers\CalculadoraController@calcularMultiplicar')->name('multiplicar');