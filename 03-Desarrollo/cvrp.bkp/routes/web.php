<?php

use Illuminate\Support\Facades\Route;
//se hace 'use' de Landingcontroller enlazado a LandingController donde se crean las funciones
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Ruta con uri de conexión a LandingController
// se crea un alias nombre de la ruta = a nombre de controlador . nombre del metodo
Route::get('/home',[LandingController::class,'index'])->name('landing.home');
Route::get('/roles',[RolController::class,'rol'])->name('roles.index');
Route::get('/details',[UsuarioController::class,'detail'])->name('roles.details');
Route::get('/roles/edit/{documento}',[UsuarioController::class,'edit'])->name('roles.edit');
