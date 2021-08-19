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

 Route::get('/', function() { 
     return view('inicio');
});
Route::get('clientes', function () {
    return view('clientes');
});
Route::get('sobre mi', function () {
    return view('sobre-mi');
});
Route::get('contacto', function () {
    return view('contacto');
});
Route::get('enviar', function () {
    return "You've been hacked.";
});
