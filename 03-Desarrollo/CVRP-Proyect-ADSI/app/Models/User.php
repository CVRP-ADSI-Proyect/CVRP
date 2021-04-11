<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//tbl_Usuario
class User extends Model
{
    use HasFactory;
    protected $primaryKey='document';
    protected $table='users';
    protected $fillable=[
        'first_name',
        'second_name',
        'first_lastname',
        'second_lastname',
        'email',
        'birth_date',
        'mobile',
        'address',
        'password',
        'image'

    ];
}
