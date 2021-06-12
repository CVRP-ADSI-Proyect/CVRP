<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_metododepago extends Model
{
    use HasFactory;
    protected $primaryKey='idmetodopago';
    protected $table='tbl_metododepago';
    protected $fillable=[
        'descripcionMetodoPago'
    ];
}
