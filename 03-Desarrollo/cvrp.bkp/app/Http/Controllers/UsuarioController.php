<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_usuario;
use App\Models\Tbl_rol;


class UsuarioController extends Controller
{
    //
    public function detail()
    {
        $detalles=tbl_usuario::all();
        return view('roles.detalles',compact('detalles'));
    }

    public function edit($documento)
    {
        $ediciones=tbl_usuario::find($documento);
        return (view('roles.edit',compact('ediciones')));

    }
}
