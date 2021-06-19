<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::all();

        return view('productos.index',compact('productos'));

    }

    public function create(){

        $categorias = Categoria::all();

        return view('productos.create',compact('categorias'));


    }

    public function store(Request $request){

        $datos =  $request->except('_token');

        if($request->hasFile('imagen')){

        $datos['imagen'] = $request->file('imagen')->store('imagen','public');

        }
          Producto::insert($datos);

          return redirect()->route('producto.index');
    }
}
