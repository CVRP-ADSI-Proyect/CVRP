<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//Aqui se crean las funciones enlazadas a Views/Landing(carpeta creada)
// donde se almacenan los php files con extensión .blade.php
class LandingController extends Controller


{   // funcion de index.blade.php
    //retornando la vista index en carpeta views
    public function index()
    {
    return view('landing.index');
    }

    public function  categorias(){
        return view('landing.categorias');
    }



}
