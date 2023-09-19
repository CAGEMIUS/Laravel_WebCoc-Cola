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

/*Ruta de la pagina principal*/
Route::get('/', function () {
    return view('welcome');
});

/*Ruta de la pagina principal, para que se conecte con los demas modulos*/
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

/*Ruta del modulo Productos*/
Route::get('/Producto', function () {
    return view('auth.Productos');
})->name('Productos');

/*Ruta del modulo de Compras*/
Route::get('/Compras', function () {
    return view('auth.Compra');
})->name('Compra');

/*Ruta del modulo del Service*/
Route::get('/servicio-al-cliente', function () {
    return view('auth.Service');
})->name('servicio-cliente');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
