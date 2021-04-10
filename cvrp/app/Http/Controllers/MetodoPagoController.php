<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_metododepago;


class MetodoPagoController extends Controller
{
    //
    public function metodopago()
    {
        $metodopagos = Tbl_metododepago::all();
        return view('metodopagos.metodopagos_index',compact('metodopagos') );
    }
}
