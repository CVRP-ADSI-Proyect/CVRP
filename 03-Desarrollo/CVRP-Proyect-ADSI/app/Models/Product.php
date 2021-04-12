<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//tbl_Producto
class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = [
        'name',
        'quantity',
        'state',
        'description',
        'price',
        'image',
        'available',
        'fk_idcategories'
    ];
}
