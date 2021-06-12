<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_contact extends Model
{
    use HasFactory;

    protected $primaryKey='idsolicitud';
    protected $table='tbl_contactos';
    protected $fillable = ['primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'email',
        'celular',
        'mensaje'];
}
