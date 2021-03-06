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
    return view('index');
})->name('main');

Route::get('/products', function () {
    return view('products');
})->name('products.list');

Route::get('/offer', function () {
    return view('special_offer');
})->name('offer');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Auth::routes();

Route::get('/sesion', [App\Http\Controllers\HomeController::class, 'index'])->name('sesion');
