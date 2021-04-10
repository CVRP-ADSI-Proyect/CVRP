<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_rol extends Model
{
    use HasFactory;
    protected $primaryKey='idRol';
    protected $table='Tbl_rol';
    protected $fillable=[
        'descripcionRol'
    ];
}
