<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_usuario extends Model
{
    use HasFactory;
    protected $primaryKey='documento';
    protected $table='tbl_usuario';
    protected $fillable=[
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'email',
        'fechaNacimiento',
        'celular',
        'direccion',
        'contraseña',
        'imagen',

    ];
}
