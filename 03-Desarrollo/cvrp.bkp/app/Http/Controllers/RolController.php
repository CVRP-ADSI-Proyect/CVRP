<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_rol;


class RolController extends Controller
{
    //
    public function rol()
    {
        $roles=Tbl_rol::all();
        return view('roles.roles_index',compact('roles'));
    }


}
